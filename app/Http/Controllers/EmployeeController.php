<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //index
    public function index()
    {
        return view('indexEmployee');
    }

    public function loopingExample()
    {
        $datas = [];
        for ($i=0; $i < 10; $i++) { 
            array_push($datas,  $i);
        }
        return view('looping', ['datas' => $datas]);
    }

    public function returnGenderValue()
    {
        // data 1
        $males = ["Robby", "Jaya", "Kukun"];

        // data 2
        $females = ["Jenny", "Lisa", "Rose"];

        return view('employeeGender', compact('males', 'females'));
    }
}

