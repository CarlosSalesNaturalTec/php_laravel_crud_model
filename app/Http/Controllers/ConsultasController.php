<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Consulta;

class ConsultasController extends Controller
{

    private $objPaciente;
    private $objConsulta;

    public function __construct()
    {
        $this->objPaciente=new Paciente();
        $this->objConsulta=new Consulta();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta=$this->objConsulta->all()->sortByDesc('data_consulta')->sortBy('nome');
        return view('consultas.index',compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes=$this->objPaciente->all();
        return view('consultas.create',compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consulta::create([
            'paciente_id' => $request->SelectNome,
            'data_consulta' => $request->InputData,
            'descricao' => $request->InputDesc,
        ]
        );
        return redirect('consultas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta=$this->objConsulta->find($id);
        return view('consultas.show', compact('consulta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = $this->objConsulta->find($id);
        $pacientes = $this->objPaciente->all();
        return view('consultas.create', compact('consulta','pacientes') );
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
        try {
            $paciente = Consulta::findOrFail($id);
            $paciente->update([
                'paciente_id' => $request->SelectNome,
                'data_consulta' => $request->InputData,
                'descricao' => $request->InputDesc,
            ]);
            return redirect('consultas');
        } catch (\Throwable $th) {
            return "ID: $id Não Localizado. Não foi possível Alterar!";
        }
    }

    public function delete($id)
    {
        $consulta=$this->objConsulta->find($id);
        return view('consultas.delete', compact('consulta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $consulta = Consulta::findOrFail($id);
            $consulta->delete();
            return redirect('consultas');
        } catch (\Throwable $th) {
            return "ID: $id Não Localizado. Não foi possível Excluir!";
        } 
    }
}
