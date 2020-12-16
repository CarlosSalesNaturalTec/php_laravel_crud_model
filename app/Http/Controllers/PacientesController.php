<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesController extends Controller
{

    private $objPaciente;

    public function __construct()
    {
        $this->objPaciente=new Paciente();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente=$this->objPaciente->all()->sortBy('nome');
        return view('pacientes.index',compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paciente::create([
            'nome' => $request->InputNome,
            'cartao_sus' => $request->InputSUS,
            'nascimento' => $request->InputNascimento,
        ]
        );
        return redirect('pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente=$this->objPaciente->find($id);
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=$this->objPaciente->find($id);
        return view('pacientes.create',compact('paciente'));
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
            $paciente = Paciente::findOrFail($id);
            $paciente->update([
                'nome' => $request->InputNome,
                'cartao_sus' => $request->InputSUS,
                'nascimento' => $request->InputNascimento,
            ]);
            return redirect('pacientes');
        } catch (\Throwable $th) {
            return "ID: $id Não Localizado. Não foi possível Alterar!";
        }
    }

    public function delete($id)
    {
        $paciente=$this->objPaciente->find($id);
        return view('pacientes.delete', compact('paciente'));
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
            $paciente = Paciente::findOrFail($id);
            $paciente->delete();
            return redirect('pacientes');
        } catch (\Throwable $th) {
            return "ID: $id Não Localizado. Não foi possível Excluir!";
        } 
    }
}
