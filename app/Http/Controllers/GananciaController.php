<?php

namespace App\Http\Controllers;

use App\Models\Ganancia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GananciaController extends Controller
{
    public function index(){
        $ganancias = Ganancia::paginate(9);
        $ganancias_All = Ganancia::all();
        
        $last_month = new Carbon('last month');
        $last_month = $last_month->format('m');

        $current_month = Carbon::now();
        $current_month = $current_month->format('m');
        $total_last_month = 0;
        $total_current_month = 0;

        foreach($ganancias_All as $gain){
            var_dump($gain->mes);
            var_dump($last_month);
            if($gain->mes == $last_month){
                $total_last_month = $total_last_month + $gain->total;
                var_dump($total_last_month);
            }elseif($gain->mes == $current_month){
                $total_current_month = $total_current_month + $gain->total;
                var_dump($total_current_month);
            }
        }

        return view('emideli.ganancia', compact('ganancias', 'total_last_month', 'total_current_month'));
    
    }
}
