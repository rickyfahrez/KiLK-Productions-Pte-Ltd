<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = DB::select("SELECT c.class_name, t.first_name as teacher, s.first_name as student
        FROM classes c
        INNER JOIN teachers t
        ON c.teachers_id = t.id
        INNER JOIN students s
        ON s.classes_id = c.id");
        
        return view('list',compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generatePDF()
    {
        $lists = DB::select("SELECT c.class_name, t.first_name as teacher, s.first_name as student
        FROM classes c
        INNER JOIN teachers t
        ON c.teachers_id = t.id
        INNER JOIN students s
        ON s.classes_id = c.id");
        
        //$data = ['title' => 'List'];

        $pdf = PDF::loadView('pdf',compact('lists'));
        //$pdf = PDF::loadView('tes', $data);



        return $pdf->download('List.pdf');
    }
}
