<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
    
class ChartDataController extends Controller
{
    
    function getRoom($room){
        $email =  $email =  Auth::user()->email;
        $sql_str = DB::select("select * from data where email = '".$email."' and roomName ='".$room."'");
        $temp = array_column($sql_str,"temp");
        $timestamp = array_column($sql_str,"created_at");
        $humidity = array_column($sql_str,"humidity");

        $data = array('temp' => $temp,'time'=> $timestamp,'himidity'=>$humidity);
        return $data;
    }
    function getRooms(Request $request){
        $email =  $email =  Auth::user()->email;
        $sql_str = DB::select("select * from room where email = '".$email."'");
        $roomname =  array_column($sql_str,"room");
        $data = array('rooms'=>$roomname);
        return $data;
    }
}
