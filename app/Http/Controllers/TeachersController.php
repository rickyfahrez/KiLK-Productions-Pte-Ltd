<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=\App\Teachers::all();
        return view('teachers',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachersadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers= new \App\Teachers;
        $teachers->first_name=$request->get('firstname');
        $teachers->last_name=$request->get('lastname');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $teachers->created_at = strtotime($format);
        $teachers->updated_at = strtotime($format);
        $teachers->save();
        
        return redirect('teachers')->with('success', 'Data has been added');
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
        $teachers = \App\Teachers::find($id);
        return view('teachersedit',compact('teachers','id'));
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
        $teachers= \App\Teachers::find($id);
        $teachers->first_name=$request->get('firstname');
        $teachers->last_name=$request->get('lastname');
        $teachers->save();
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = \App\Teachers::find($id);
        $teachers->delete();
        return redirect('teachers')->with('success','Information has been  deleted');
    }

    
}
