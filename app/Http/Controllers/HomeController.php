<?php

namespace App\Http\Controllers;

use App\Models\ArsipData;
use App\Models\Berkas;
use App\Models\BerkasLog;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori1 = Berkas::where('category_id', '=', 1)->count();
        $kategori2 = Berkas::where('category_id', '=', 2)->count();
        $kategori3 = Berkas::where('category_id', '=', 3)->count();
        $kategori4 = Berkas::where('category_id', '=', 4)->count();
        $kategori5 = Berkas::where('category_id', '=', 5)->count();
        $kategori6 = Berkas::where('category_id', '=', 6)->count();
        $kategori7 = Berkas::where('category_id', '=', 7)->count();
        return view('home.welcome', compact('kategori1', 'kategori2', 'kategori3', 'kategori4', 'kategori5', 'kategori6', 'kategori7'));
    }

    public function lacak()
    {
        $id = Auth::user()->id;
        $berkas = Berkas::where('user_id', $id)->get();

        return view('home.lacak', ['berkas' => $berkas]);
    }

    public function lacak_detail($id)
    {
        $berkas = Berkas::where('id', $id)->get();
        $berkaslog = BerkasLog::where('berkas_id', $id)->get();
        return view('home.detail', ['berkas' => $berkas, 'berkaslog' => $berkaslog]);
    }

    public function cetak_lacak(Request $request, $id)
    {
        // $id = Auth::user()->id;
        $berkas = Berkas::where('id', $id)->get();
        $berkaslog = BerkasLog::where('berkas_id', $id)->get();
        return view('home.cetak', compact('berkaslog', 'berkas'));
   
    }

    public function tambah_berkas()
    {
        $category = Category::all();
        return view('home.berkas', ['category' => $category]);
    }

    public function upload_satu(Request $request)
    {
        $category = Category::all();
        $berkas = $request->session()->get('berkas');
        return view('home.upload-satu', ['category' => $category, 'berkas' => $berkas]);
    }

    public function store_satu(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telp' => 'required|max:255',
            'category_id' => 'required',
        ]);

        if (empty($request->session()->get('berkas'))) {
            $berkas = new Berkas();
            $berkas->fill($validatedData);
            $request->session()->put('berkas', $berkas);
        } else {
            $berkas = $request->session()->get('berkas');
            $berkas->fill($validatedData);
            $request->session()->put('berkas', $berkas);
        }

        return redirect()->route('upload.dua');
    }
    public function upload_dua(Request $request)
    {
        $berkas = $request->session()->get('berkas');
        return view('home.upload-dua', compact('berkas'));
    }

    public function store_dua(Request $request)
    {
        $validatedData = $request->validate([

            'file' => 'required',
            'file.*' => 'mimes:ppt,pptx,doc,docx,txt,pdf,xls,xlsx,jpeg,jpg,png,psd,gif,raw,zip|max:204800',
            'keterangan' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('public/berkas', $file->getClientOriginalName());
                $data[] = $name;
            }
        }
        $validatedData['file'] = json_encode($data);
        if (empty($request->session()->get('berkas'))) {
            $berkas = new Berkas();
            $berkas->fill($validatedData);
            $request->session()->put('berkas', $berkas);
        } else {
            $berkas = $request->session()->get('berkas');
            $berkas->fill($validatedData);
            $request->session()->put('berkas', $berkas);
        }


        return redirect()->route('upload.tiga');
    }
    public function upload_tiga(Request $request)
    {

        $berkas = $request->session()->get('berkas');
        return view('home.upload-tiga', compact('berkas'));
    }

    public function store_tiga(Request $request)
    {
        $berkas = $request->session()->get('berkas');
        $berkas->save();
        $log = new BerkasLog;
        $log->berkas_id = $berkas->id;
        $log->status_id = $berkas->status_id == null;
        $log->save();
        $request->session()->forget('berkas');

        return redirect()->route('lacak');
    }
    // public function berkas_store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nama' => 'required|max:255',
    //         'alamat' => 'required|max:255',
    //         'no_telp' => 'required|max:255',
    //         'category_id' => 'required',
    //         'status_id' => 'nullable',
    //         'file' => 'required|mimes:ppt,pptx,doc,docx,txt,pdf,xls,xlsx,jpeg,jpg,png,psd,gif,raw,zip|max:204800',
    //         'keterangan' => 'required',
    //     ]);

    //     $validated['user_id'] = auth()->user()->id;
    //     if ($request->hasFile('file')) {
    //         $validated['file'] = $request->file->getClientOriginalName();
    //         $request->file->storeAs('dataFile', $validated['file']);
    //     } else {
    //         $validated = 'nodatafound';
    //     }
    //     $berkas = Berkas::create($validated);
    //     echo $berkas->no_berkas;
    //     $log = new BerkasLog;
    //     $log->berkas_id = $berkas->id;
    //     $log->status_id = $berkas->status_id == null;
    //     $log->save();


    //     // dd($log);
    //     return redirect()->route('lacak', ['berkas' => $berkas, 'log' => $log])->with('status', 'Data Baru berhasil Ditambahkan!');
    // }
}
