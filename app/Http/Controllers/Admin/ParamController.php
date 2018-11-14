<?php

namespace App\Http\Controllers\Admin;

use App\Param;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Param  $param
     * @return \Illuminate\Http\Response
     */
    public function show(Param $param)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Param  $param
     * @return \Illuminate\Http\Response
     */
    public function edit(Param $param)
    {
        return view('admin.param.edit', [
            'param'   => $param
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Param  $param
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Param $param)
    {
        $request['is_available'] = isset($request['is_available']) ? 1 : 0;
        $request['is_lazy'] = isset($request['is_lazy']) ? 1 : 0;
        
        $request->validate([
            'is_available' => 'boolean',
            'is_lazy' => 'boolean',
        ]); 
        
        $param->update($request->all());
        
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Param  $param
     * @return \Illuminate\Http\Response
     */
    public function destroy(Param $param)
    {
        //
    }
}
