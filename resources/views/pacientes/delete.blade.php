@extends('templates.template1')
@section('content')
    <h1 class="text-center mt-4">
        <i class="fas fa-caution"></i> Exclusão de Paciente <i class="fas fa-notes-medical"></i>
    </h1>
    <hr>
    <div class="col-8 m-auto">
        <strong>ID :</strong> {{$paciente->id}}<br>
        Paciente : {{$paciente->nome}}<br>
        Cartão SUS : {{$paciente->cartao_sus}}<br>
        Nascimento : {{$paciente->nascimento->format('d/m/Y')}}<br>
        <br>
        Data de Cadastro : {{$paciente->created_at->format('d/m/Y h:m:s') }}<br>
        Última Atualização : {{$paciente->updated_at->format('d/m/Y h:m:s')}}<br>
    </div>
    <hr>
    <form action="{{ route('pacientes.destroy', ['id' => $paciente->id]) }}" method="POST">
        @method('delete')
        @csrf
        <div class="col-8 m-auto">
            <a href="{{ url('pacientes') }}">
                <button type="button" class="btn btn-primary">Voltar</button>
            </a>
            <button type="submit" class="btn btn-danger">Apagar</button>
        </div>
    </form>
    
@endsection