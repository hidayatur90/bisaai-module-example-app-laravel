<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeeController extends Controller
{

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

