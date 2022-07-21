<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        
        // $name = $request->input('emp_name');
        // if (ctype_lower($name)){
        //     $firstLetter = strtoupper($name);
        //     $name[0] = $firstLetter;
        // }

        // $surname = $request->input('emp_surname');
        // if (ctype_lower($surname)){
        //     $firstLetter = strtoupper($surname);
        //     $surname[0] = $firstLetter;
        // }        
        
        // $email = $request->input('emp_email');
        // // $updatedAt = $request->input('updated_at');
        // // $createdAt = $request->input('created_at');

        // $employeeData = array(
        //     "name" => $name,
        //     "surname" => $surname,
        //     "email" => $email
        //     // "updatedAt" => $updatedAt,
        //     // "createdAt" => $createdAt
        //   );

        // Employee::create($employeeData);

        Employee::create($request->all());
        
        return redirect('/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
