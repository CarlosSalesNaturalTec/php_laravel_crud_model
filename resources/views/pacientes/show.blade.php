@extends('templates.template1')
@section('content')
    <h1 class="text-center mt-4"> <i class="fas fa-hospital-user"></i> Ficha de Paciente <i class="fas fa-hospital-user"></i>
    </h1>
    <hr>
    <div class="col-8 m-auto">
        Nome : {{$paciente->nome}}<br>
        Cartão SUS : {{$paciente->cartao_sus}}<br>
        Nascimento : {{$paciente->nascimento->format('d/m/Y')}}<br>
        Data de Cadastro : {{$paciente->created_at->format('d/m/Y h:i:s') }}<br>
        Última Atualização : {{$paciente->updated_at->format('d/m/Y h:i:s')}}<br>
    </div>
    <hr>
    <div class="col-8 m-auto">
        <a href="{{ url('pacientes') }}">
            <button type="button" class="btn btn-primary">Voltar</button>
        </a>
    </div>
    
@endsection