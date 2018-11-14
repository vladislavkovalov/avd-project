<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;
use App\Slot;
use App\Param;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slot =  Slot::first();
        
        $result = [
            'slot_name' => $slot->slot_name,
            'slot_element_id' => $slot->slot_element_id,
            'slot_sizes' => $slot->slot_sizes,
        ];
        
        return $result;
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
        $result = $request->status ? 1 : 0;
        if(!isset($request->status) OR !isset($request->value))
        {
            echo '\'status\' and \'value\' is required!';
            die();
        }
        $record = Param::first();
        
        if($request->value == 'adv')
        {
            $record->update(['is_available' => $result]);
        }
        elseif($request->value == 'lazy')
        {
            $record->update(['is_lazy' => $result]);
        }
        $record->save();
        
        return $result;
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
}
