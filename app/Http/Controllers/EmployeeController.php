<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    // //index
    // public function index()
    // {
    //     return view('indexEmployee');
    // }

    // public function loopingExample()
    // {
    //     $datas = [];
    //     for ($i=0; $i < 10; $i++) { 
    //         array_push($datas,  $i);
    //     }
    //     return view('looping', ['datas' => $datas]);
    // }

    // public function returnGenderValue()
    // {
    //     // data 1
    //     $males = ["Robby", "Jaya", "Kukun"];

    //     // data 2
    //     $females = ["Jenny", "Lisa", "Rose"];

    //     return view('employeeGender', compact('males', 'females'));
    // }

    public function get_all_employees()
    {
        $employees = Employees::all();
        return view('indexEmployee', ['employees' => $employees]);
    }

    public function store_employee(Request $request)
    {
        $this->validate($request,[
    		'firstName' => 'required|string',
    		'lastName' => 'required|string',
    		'gender' => 'required|string',
    		'age' => 'integer']
        );

        Employees::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'gender' => $request->gender,
            'age' => $request->age
        ]);

        return redirect('/');

    }   

    public function get_employee_by_id($id)
    {
        $employee = Employees::find($id);
        return view('editEmployee', ['employee' => $employee]);
    }

    public function update_employee(Request $request, $id)
    {
        $this->validate($request,[
    		'firstName' => 'required|string',
    		'lastName' => 'required|string',
    		'gender' => 'required|string',
    		'age' => 'integer']
        );

        Employees::where('id', $id)
        ->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'gender' => $request->gender,
            'age' => $request->age
        ]);

        return redirect('/');
    }

    public function delete_employee($id)
    {
        Employees::where('id', $id)->delete();
        return redirect('/');
    }

}

