<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes=\App\Classes::all();
        return view('classes',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers=\App\Teachers::all();
        return view('classesadd',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classes= new \App\Classes;
        $classes->teachers_id=$request->get('teachersname');
        $classes->class_name=$request->get('classesname');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $classes->created_at = strtotime($format);
        $classes->updated_at = strtotime($format);
        $classes->save();
        
        return redirect('classes')->with('success', 'Data has been added');
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
        $teachers=\App\Teachers::all();
        $classes = \App\Classes::find($id);
        return view('classesedit',compact('classes','id','teachers'));
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
        $classes= \App\Classes::find($id);
        $classes->class_name=$request->get('classesname');
        $classes->teachers_id=$request->get('teachersname');
        $classes->save();
        return redirect('classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classes = \App\Classes::find($id);
        $classes->delete();
        return redirect('classes')->with('success','Information has been  deleted');
    }
}
