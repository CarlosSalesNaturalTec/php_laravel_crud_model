@extends('templates.template1')
@section('content')
    <h1 class="text-center mt-4">
        <i class="fas fa-caution"></i> Exclusão de Consulta <i class="fas fa-notes-medical"></i>
    </h1>
    <hr>
    <div class="col-8 m-auto">
        @php
            $paciente=$consulta->find($consulta->id)->relPacientes;
        @endphp
        <strong>ID :</strong> {{$consulta->id}}<br>
        Data Consulta : {{$consulta->data_consulta->format('d/m/Y')}}<br>
        Data Consulta : {{$consulta->data_consulta->format('d/m/Y')}}<br>
        Paciente : {{$paciente->nome}}<br>
        Cartão SUS : {{$paciente->cartao_sus}}<br>
        Descrição : {{$consulta->descricao}}<br>
        <br>
        Data de Cadastro : {{$consulta->created_at->format('d/m/Y h:i:s') }}<br>
        Última Atualização : {{$consulta->updated_at->format('d/m/Y h:i:s')}}<br>
    </div>
    <hr>
    <form action="{{ route('consultas.destroy', ['id' => $consulta->id]) }}" method="POST">
        @method('delete')
        @csrf
        <div class="col-8 m-auto">
            <a href="{{ url('consultas') }}">
                <button type="button" class="btn btn-primary">Voltar</button>
            </a>
            <button type="submit" class="btn btn-danger">Apagar</button>
        </div>
    </form>
    
@endsection