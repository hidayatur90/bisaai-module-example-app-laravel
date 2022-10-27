<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function get_all_employees()
    {
        $employees = Employees::all();
        return view('indexEmployee', ['employees' => $employees]);
    }

}

