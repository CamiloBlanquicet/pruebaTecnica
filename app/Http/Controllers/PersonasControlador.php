<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Personas::all(); 
        return view('listarPersonas')->with('personas',$lista);
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
            
            if ($request->input('terminos') == 'check') {
                $validatedData = $request->validate([
                    'nombre' => 'required|max:255',
                    'apellido' => 'required',
                    'correo' => 'required',
                ]);
                
        
                $show = Personas::create($validatedData);
        
                return redirect()->route('personas.index');
        
            }else{
                return view('personas')->with('error','Upss');
        
            }
            
          
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        
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
        $validatedData = $request->validate([
            'nombre' => 'required|max:20',
            'apellido' => 'required|max:20',
            'correo' => 'required|max:20',
        ]);
        
        Personas::whereId($id)->update($validatedData);
        

        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Personas::findOrFail($id);
        $persona->delete();

        return redirect()->route('personas.index');
    }
}
