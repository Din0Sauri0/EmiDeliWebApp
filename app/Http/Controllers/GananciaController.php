<?php

namespace App\Http\Controllers;

use App\Models\Ganancia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GananciaController extends Controller
{
    public function index(){
        //dd('hoal');
        $ganancias = Ganancia::paginate(9);
        $ganancias_All = Ganancia::all();

        
        $last_month = new Carbon('last month');
        $last_month = $last_month->format('m');

        $current_month = Carbon::now();
        $current_month = $current_month->format('m');
        $total_last_month = 0;
        $total_current_month = 0;

        foreach($ganancias_All as $gain){
            if($gain->mes == $last_month){
                $total_last_month = $total_last_month + $gain->total;
            }elseif($gain->mes == $current_month){
                $total_current_month = $total_current_month + $gain->total;
            }
        }

        $ruta = Route::currentRouteName();

        return view('emideli.ganancia', compact('ganancias', 'total_last_month', 'total_current_month', 'ruta'));
    
    }

    public function select_between(Request $request){
        $ganancias = Ganancia::paginate(9);
        $ganancias_All = Ganancia::all();

            
        $last_month = new Carbon('last month');
        $last_month = $last_month->format('m');

        $current_month = Carbon::now();
        $current_month = $current_month->format('m');
        $total_last_month = 0;
        $total_current_month = 0;

        foreach($ganancias_All as $gain){
            if($gain->mes == $last_month){
                $total_last_month = $total_last_month + $gain->total;
            }elseif($gain->mes == $current_month){
                $total_current_month = $total_current_month + $gain->total;
            }
        }

        $ganancia_between = Ganancia::whereBetween("created_at", [$request->start_date, $request->end_date])->get();
        $ruta = Route::currentRouteName();

        return view('emideli.ganancia', compact('ganancia_between', 'ganancias', 'total_last_month', 'total_current_month', 'ruta'));

    }


}

