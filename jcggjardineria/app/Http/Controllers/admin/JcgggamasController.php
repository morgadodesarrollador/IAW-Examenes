<?php

namespace App\Http\Controllers\admin;

use App\Models\jcgggamas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JcgggamasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamas = jcgggamas::all();
      
        return response()->json($gamas);
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
        echo $request->input('Gama');
        dd($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jcgggamas  $jcgggamas
     * @return \Illuminate\Http\Response
     */
    public function show(jcgggamas $jcgggamas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jcgggamas  $jcgggamas
     * @return \Illuminate\Http\Response
     */
    public function edit(jcgggamas $jcgggamas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jcgggamas  $jcgggamas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jcgggamas $jcgggamas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jcgggamas  $jcgggamas
     * @return \Illuminate\Http\Response
     */
    public function destroy(jcgggamas $jcgggamas)
    {
        //
    }
}
