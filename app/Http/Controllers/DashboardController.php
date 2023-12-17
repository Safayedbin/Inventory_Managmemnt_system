<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function DashboardView(Request $request){
        $today=DB::table('sales')
        ->sum('sales')
        ->where('sales_date', '=', )
        $parameter= $request->parameter;
        return view('dashboardpage', ['parameter'=> $parameter]);
    }
}
