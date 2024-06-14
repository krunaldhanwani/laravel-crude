<?php

namespace App\Http\Controllers;

use App\Models\Practise;
use Illuminate\Http\Request;

class PractiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practise = Practise::get();  
        return view('Practise.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data = new Practise();
        $data->name = $request->name; 
        $data->email = $request->email;
        $data->save();
        return redirect()->route('Practise.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function show(Practise $practise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function edit(Practise $practise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Practise $practise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practise  $practise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practise $practise)
    {
        //
    }
}
