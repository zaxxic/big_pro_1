<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Charts;

class ChartController extends Controller
{
    public function showChart()
    {
        $users = User::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        $chart = Charts::database($users, 'bar', 'highcharts')
            ->title('Jumlah Pengguna Terdaftar Per Bulan')
            ->elementLabel('Jumlah Pengguna')
            ->dimensions(500, 300)
            ->groupByMonth();

        return view('dashboard', compact('chart'));
    }
}
