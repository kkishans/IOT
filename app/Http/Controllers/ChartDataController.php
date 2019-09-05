<?php

namespace App\Http\Controllers;
namespace SDCU\GenerlBundle\Entity;
use \DataTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class ChartDataController extends Controller
{
    function getAllX(){
        $min_array = array();
        $sql_str = DB::select("select created_at from data");
        if(!empty($sql_str)){
            foreach($sql_str as $min){
                
                $data = new \DataTime($min->date);
                $newmin = $data->format('m');
                return $newmin;
            }
        }
        return $min_array;
    }
    function getAllY(){

        $sql_str = DB::select("select temp from data");
        $temps = json_encode($sql_str);
        return $sql_str;
    }
}
