<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class ChartDataController extends Controller
{
    
    function getAllY(){
        
        $sql_str = DB::select("select * from data");
        $temp = array_column($sql_str,"temp");
        $timestamp = array_column($sql_str,"created_at");
        $humidity = array_column($sql_str,"humidity");

        $data = array('temp' => $temp,'time'=> $timestamp,'himidity'=>$humidity);

    //    // $temp = $data->temp;
        //$array = DB::where('temp' , $temp)->plunk('temp')->toArray();
        return $data;
    }
}
