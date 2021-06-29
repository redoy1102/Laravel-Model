<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentsModel;

class AllController extends Controller
{
    function showAll(){
        $result = studentsModel::pluck('name','class');
        return $result;
    }

    function insert(){
        $result = studentsModel::insert(['name'=>'Check','class'=>'15','roll'=>'25']);
        
        if($result == true){
            return "Data insert done!";
        }
        else{
            return "Data insert failed";
        }
    }
}
