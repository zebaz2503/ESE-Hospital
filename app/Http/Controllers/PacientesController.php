<?php

namespace App\Http\Controllers;

use App\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PacientesController extends Controller
{

    function __construct()
    {
        $this->middleware([
            'auth'
            
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$datos['pacientes']=Pacientes::paginate(10);
        $datos['pacientes']= Pacientes::name($request->get('name'))->paginate(5);
        return view('Pacientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Pacientes.create');
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
        $Mensaje=["required"];


        $campos=[


            'nombre_paciente' => 'required|string|max:100',
            'cedula' => 'required|string|max:100',
            'edad' => 'required|string|max:100',
            'eps' => 'required|string|max:100',
            'acompanante' => 'required|string|max:100',
            'tel' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'codigo_cie' => 'required|string|max:100',
            'diagnostico' => 'required|string|max:100',
            'medico' => 'required|string|max:100',
            'nom_familia' => 'required|string|max:100',
            'enfermero' => 'required|string|max:100',
            'descrip' => 'required|string|max:2000',

        ];

        $Mensaje=["required"=>':attribute es requerido'];

        $this->validate($request, $campos, $Mensaje);

        //$datosPacientes=request()->all();

        $datosPacientes=request()->except(['_token', '_method']);
        Pacientes::insert($datosPacientes);

        //return response()->json($datosPacientes);
        return redirect('pacientes')->with('Mensaje','Paciente registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente= Pacientes::findOrFail($id);

        return view('pacientes.edit', compact('paciente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $paciente = Pacientes::all();
        $campos=[
            'descrip' => 'required|string|max:2000',

        ];

        $Mensaje=["required"=>':attribute es requerido(a)'];

        $this->validate($request, $campos, $Mensaje);
        /////////////////////////////////////////////////////////////


        $datosPacientes=request()->except(['_token','_method']);


        $paciente = Pacientes::find($id);
        $paciente->descrip = $request->descrip;

        $paciente->save();


        //Pacientes::where('id','=',$id)->update($datosPacientes);

        //$paciente= Pacientes::findOrFail($id);
        //return view('pacientes.edit', compact('paciente'));

        return redirect('pacientes')->with('Mensaje','Paciente modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}
