<?php

namespace App\Http\Controllers;

use App\Models\ModelKeluhan;
use Illuminate\Http\Request;

class ModelKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelkeluhan = ModelKeluhan::all();
        
        return view('keluhan.index', compact('modelkeluhan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelKeluhan::create([
            'name' => $request->name, 
            'phone'=> $request->phone, 
            'birthdate' => $request->birthdate, 
            'age'=> $request->age
        ]);

        return redirect()->route('model-keluhan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluhan = ModelKeluhan::findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelKeluhan = ModelKeluhan::findOrFail($id);

        return view('keluhan.edit', compact('modelKeluhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelKeluhan $modelKeluhan)
    {
        $modelKeluhan = ModelKeluhan::findOrFail($modelKeluhan->id);
        $modelKeluhan->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'age' => $request->age,
        ]);

        return redirect()->route('model-keluhan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelkeluhan = ModelKeluhan::findOrFail($id);
        $modelkeluhan->delete();

        return redirect()-> route('model-keluhan.index');
    }
}
