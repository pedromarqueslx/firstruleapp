<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InfraestruturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $infraestruturas = Infraestrutura::all();

        return view('infraestruturas.index', compact('infraestruturas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('infraestruturas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->referencia_orait;
        Infraestrutura::create($request->all());

        return  redirect('/infraestruturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $infraestruturas = Infraestrutura::findOrFail($id);

        return view('infraestruturas.show', compact('infraestruturas'));

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
        $infraestruturas = Infraestrutura::findOrFail($id);

        return view('infraestruturas.edit', compact('infraestruturas'));

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
        //return $request->all();
        $infraestruturas = Infraestrutura::findOrFail($id);

        $infraestruturas->update($request->all());

        return redirect('/infraestruturas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $infraestruturas = Infraestrutura::findOrFail($id);

        $infraestruturas->delete();

        return redirect('/infraestruturas');

    }
}



