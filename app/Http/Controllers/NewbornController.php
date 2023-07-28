<?php

namespace App\Http\Controllers;

use App\Models\Newborn;
use App\Http\Requests\StorenewbornRequest;
use App\Http\Requests\UpdatenewbornRequest;

class NewbornController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newborns = Newborn::all();
        return view('newborn.index', [
            'newborn' => $newborns 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenewbornRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(newborn $newborn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newborn $newborn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenewbornRequest $request, newborn $newborn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newborn $newborn)
    {
        //
    }
}
