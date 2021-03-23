<?php

namespace App\Http\Controllers;

use App\Models\Infraestrutura;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InfraestruturasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    //public function store(Request $request)
    public function store()
    {
        //dd(request()->all());
        $inputs = request()->validate([
            'referencia_operador'=>'required|max:40',
            'municipio_id'       =>'required|max:40',
            'municipio_cartas'   =>'required|max:20',
            'anexo'              =>'mimes:pdf,png,jpeg',
            //'anexo'              =>'file',
            'cvp_entrada'        =>'required|max:50'
        ]);

        // check if anexo exists
        /*
        if($file = request('anexo')){
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            //$inputs['anexo'] = request('anexo')->store('images');
            $inputs['anexo'] = $name;
        }
        */

        if(request('anexo')){
            $inputs['anexo'] = request('anexo')->store('images');
        }

        auth()->user()->infraestruturas()->create($inputs);
        return back();

        //Infraestrutura::create($inputs->all());
        //return  redirect('/infraestruturas');
        //dd($request->anexo);
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
        /*$this->validate($request,[
            'referencia_operador'=>'required|max:50',
            'municipio_id'=>'required',
            'municipio_cartas'=>'required|max:50',
            'cvp_entrada'=>'required'
        ]);*/

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



