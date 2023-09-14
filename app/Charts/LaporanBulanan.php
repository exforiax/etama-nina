<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\Berkas;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class LaporanBulanan
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->addData('Diserahkan', [Berkas::where('status_id', '=', 3)->whereMonth('created_at', Carbon::now()->month)->orderBy('created_at', 'asc')->count()])
            ->addData('Belum Diserahkan', [Berkas::where('status_id', '=', 1)->whereMonth('created_at', Carbon::now()->month)->orderBy('created_at', 'asc')->count()])
            ->addData('Ditolak', [Berkas::where('status_id', '=', 4)->whereMonth('created_at', Carbon::now()->month)->orderBy('created_at', 'asc')->count()])
            ->setColors(['#43ff00', '#fff000', '#f44336',])
            ->setXAxis([Berkas::select(DB::raw("MONTHNAME(created_at) as bulan"))
                ->groupBy(DB::raw("MONTHNAME(created_at)"))
                ->orderBy('created_at', 'asc')
                ->pluck('bulan')])
            ->setXAxis([Berkas::select(DB::raw("MONTHNAME(created_at) as bulan"))
                ->groupBy(DB::raw("MONTHNAME(created_at)"))
                ->orderBy('created_at', 'asc')
                ->pluck('bulan')])
            ->setXAxis([Berkas::select(DB::raw("MONTHNAME(created_at) as bulan"))
                ->groupBy(DB::raw("MONTHNAME(created_at)"))
                ->orderBy('created_at', 'asc')
                ->pluck('bulan')]);
    }
}
