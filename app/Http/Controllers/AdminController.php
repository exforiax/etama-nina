<?php

namespace App\Http\Controllers;

use ZipArchive;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Berkas;
use App\Models\Status;
use App\Models\Category;
use App\Models\ArsipData;
use App\Models\BerkasLog;
use Illuminate\Http\Request;
use App\Charts\LaporanBulanan;
use App\Notifications\BerkasNotif;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    // Dashboard
    public function index(LaporanBulanan $chart)
    {
        $total_berkas = Berkas::select(DB::raw("COUNT(*) as berkas"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("month(created_at)"))
            ->pluck('berkas');
        $bulan  = Berkas::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->groupBy(DB::raw("MONTHNAME(created_at)"))
            ->orderBy('created_at', 'asc')
            ->pluck('bulan');
        $data_serahkan =
            Berkas::where('status_id', '=', 3)->whereMonth('created_at', Carbon::now()->month)->count();
        $data_belum =
            Berkas::where('status_id', '<', 3)->whereMonth('created_at', Carbon::now()->month)->count();
        $arsip = ArsipData::all()->count();
        $belumdiserahkan = Berkas::where('status_id', '=', 1)->count();
        $diserahkan = Berkas::where('status_id', 3)->count();
        // dd($data_belum);
        return view('admin.dashboard', ['chart' => $chart->build(), 'data_serahkan' => $data_serahkan, 'data_belum' => $data_belum, 'arsip' => $arsip, 'belumdiserahkan' => $belumdiserahkan, 'diserahkan' => $diserahkan, 'bulan' => $bulan, 'total_berkas' => $total_berkas]);
    }
    // End of Dashboard

    // Kategori
    public function view_category()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;
        $category->save();
        return redirect()->back()->with('message', 'Kategori Baru Telah Ditambahkan');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('delete', 'Kategori berhasil Dihapus');
    }
    // End Of Kategori

    // Dokumen Pendaftaran
    public function view_pendaftaran()
    {
        $berkas = Berkas::all();
        $status = Status::where('id', '>', 1)->get();

        // dd($berkas);
        return view('admin.berkas.pendaftaran', compact('berkas', 'status'));
    }

    public function detail_pendaftaran($id)
    {
        $berkas = Berkas::where('id', $id)->get();
        return view('admin.berkas.detail-pendaftaran', compact('berkas'));
    }

    public function update_status(Request $request, $id)
    {
        $getStatus = Berkas::where('id', $id)->first();
        $user = User::where('id', $getStatus->user_id)->first();

        if ($getStatus) {
            $getStatus->update(
                [
                    'status_id' => $request->status_id,
                ],

            );
            $log = new BerkasLog;
            $log->berkas_id = $getStatus->id;
            $log->status_id = $getStatus->status_id;
            $log->save();

            // dd($user);
            if ($getStatus->status_id == 3) {
                $arsip = new ArsipData;
                $arsip->nama = $getStatus->nama;
                $arsip->berkas_id = $getStatus->id;
                $arsip->category_id = $getStatus->category_id;
                $arsip->status_id = $getStatus->status_id;
                $arsip->file = $getStatus->file;
                $arsip->keterangan = $getStatus->keterangan;
                echo $arsip->no_berkas;
                $arsip->save();
                Notification::send($user, new BerkasNotif($getStatus));
            }
            if ($getStatus->status_id == 4) {
                Notification::send($user, new BerkasNotif($getStatus));
            }
            return redirect()->back()->with('status', 'Status berhasil di Update');
        } else {
            return redirect()->back()->with('status', 'Status berhasil di Update');
        }
        // $getStatus = Berkas::select('status_id', 'id')->where('id', $id)->first();
        // if ($getStatus->status_id == 1) {
        //     $log = new BerkasLog;
        //     $log->berkas_id = $getStatus->id;
        //     $log->status_id = $getStatus->status_id = 2;
        // } elseif ($getStatus->status_id == 1) {
        //     $log = new BerkasLog;
        //     $log->berkas_id = $getStatus->id;
        //     $log->status_id = $getStatus->status_id = 4;
        // } elseif ($getStatus->status_id == 2) {
        //     $log = new BerkasLog;
        //     $log->berkas_id = $getStatus->id;
        //     $log->status_id = $getStatus->status_id = 3;
        // }
        // Berkas::where('id', $id)->update([
        //     'status_id' => $log->status_id

        // ]);

        // $log->save();

    }

    public function delete_berkas($id)
    {
        $berkas = DB::table('berkas')
            ->leftJoin('berkas_log', 'berkas.id', '=', 'berkas_log.berkas_id')
            ->where('berkas.id', $id);
        DB::table('berkas_log')->where('berkas_id', $id)->delete();
        $berkas->delete();
        return redirect()->back()->with('delete', 'Berkas berhasil Ditolak');
    }
    // public function update_proses(Request $request, $id)
    // {
    //     $getStatus = Berkas::where('id', $id)->first();
    //     if ($getStatus->status_id == 1) {
    //         $status_id = 2;
    //     }
    //     Berkas::where('id', $id)->update(['status_id' => $status_id]);
    //     $log = new BerkasLog;
    //     $log->status_id = $getStatus['status_id'];
    //     $log->save();
    //     return redirect()->back()->with('status', 'Status berhasil di Update');
    // }

    // public function update_verifikasi(Request $request, $id)
    // {
    //     $getStatus = Berkas::select('status_id')->where('id', $id)->first();
    //     if ($getStatus->status_id == 2) {
    //         $status_id = 3;
    //     }
    //     Berkas::where('id', $id)->update(['status_id' => $status_id]);
    //     $log = new BerkasLog;
    //     $log->status_id = $getStatus['status_id'];
    //     $log->save();
    //     return redirect()->back()->with('status', 'Status berhasil di Update');
    // }

    // public function update_ditolak(Request $request, $id)
    // {
    //     $getStatus = Berkas::select('status_id')->where('id', $id)->first();
    //     if ($getStatus->status_id == 1) {
    //         $status_id = 4;
    //     }
    //     Berkas::where('id', $id)->update(['status_id' => $status_id]);
    //     $log = new BerkasLog;
    //     $log->status_id = $getStatus['status_id'];
    //     $log->save();
    //     return redirect()->back()->with('status', 'Status berhasil di Update');
    // }

    public function view_diserahkan()
    {

        $berkas = Berkas::where('status_id', 3)->get();
        return view('admin.diserahkan', compact('berkas'));
    }

    public function view_ditolak()
    {
        $berkas = Berkas::where('status_id', 4)->get();
        return view('admin.berkas.ditolak', compact('berkas'));
    }

    // End Of Berkas Pendaftaran


    // Arsip
    public function view_arsip()
    {
        $category = Category::all();
        $arsip = ArsipData::all();
        return view('admin.arsip', compact('arsip', 'category'));
    }

    public function arsip_store(Request $request)
    {
        $validated = request()->validate([
            'nama' => 'required',
            'tgl_arsip' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'file' => 'required|mimes:ppt,pptx,doc,docx,txt,pdf,xls,xlsx,jpeg,jpg,png,psd,gif,raw,zip|max:204800'
        ]);
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file->getClientOriginalName();
            $request->file->storeAs('dataFile', $validated['file']);
        } else {
            $validated = 'nodatafound';
        }
        $arsip = ArsipData::create($validated);
        echo $arsip->no_berkas;
        return redirect()->back()->with('message', 'Berhasil mengarsipkan berkas');
    }

    public function arsip_delete($id)
    {
        $arsip = ArsipData::find($id);
        $arsip->delete();
        return redirect()->back()->with('delete', 'Arsip berhasil Dihapus');
    }
    // End oF Arsip

    // Download
    public function download_dokumen($id)
    {
        $arsip = ArsipData::where('id', $id)->first();
        $file = $arsip->file;
        return response()->download([storage_path('dataFile/' . $file)]);
    }
    // End of Download

}
