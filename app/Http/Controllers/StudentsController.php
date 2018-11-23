<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=\App\Students::all();
        return view('students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('studentsadd');

        $classes=\App\Classes::all();
        return view('studentsadd',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students= new \App\Students;
        $students->classes_id=$request->get('classesname');
        $students->first_name=$request->get('firstname');
        $students->last_name=$request->get('lastname');
        $students->email=$request->get('email');
        $students->phone=$request->get('phone');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $students->created_at = strtotime($format);
        $students->updated_at = strtotime($format);
        $students->save();
        
        return redirect('students')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes=\App\Classes::all();
        $students = \App\Students::find($id);
        return view('studentsedit',compact('students','id','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students= \App\Students::find($id);
        $students->classes_id=$request->get('classesname');
        $students->first_name=$request->get('firstname');
        $students->last_name=$request->get('lastname');
        $students->email=$request->get('email');
        $students->phone=$request->get('phone');
        $students->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = \App\Students::find($id);
        $students->delete();
        return redirect('students')->with('success','Information has been  deleted');
    }
}
