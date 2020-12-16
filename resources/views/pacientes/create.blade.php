@extends('templates.template1')
@section('content')

    <h2 class="text-center mt-4 mb-4"><i class="fas fa-hospital-user"></i>  
        @if(isset($paciente)) Alterar Dados de Paciente @else Novo Paciente @endif
        <i class="fas fa-hospital-user"></i>
    </h2>

        @if(isset($paciente))
            <form method="post" action="{{ url ("pacientes/$paciente->id") }}">
                @method('patch')
        @else
            <form action="{{ route('pacientes.store') }}" method="POST">
        @endif
        
        @csrf
        <div class="col-md-3 col-lg-3">
            <legend>Dados Pessoais</legend>
        </div>
      
        <div class="form-group">
            <label for="InputNome" class="col-md-2 col-lg-1 control-label">Nome</label>
            <div class="col-md-6 col-lg-6">
                <input type="text" class="form-control" name="InputNome" id="InputNome"
                    value="{{ $paciente->nome ?? ''}}" 
                    autofocus required>
            </div>
        </div>

        <div class="form-group" >
            <label for="InputSUS" class="col-md-2 col-lg-1 control-label">Cartão SUS</label>
            <div class="col-md-2 col-lg-2">
                <input type="number" class="form-control" name="InputSUS" id="InputSUS" 
                    value="{{ $paciente->cartao_sus ?? ''}}" 
                    required >
            </div>
        </div>

        <div class="form-group" >
            <label for="InputNascimento" class="col-md-3 col-lg-2 control-label">Data de Nascimento</label>
            <div class="col-md-2 col-lg-2">
                <input type="date" class="form-control" name="InputNascimento" id="InputNascimento" 
                    @if (isset($paciente))
                        value="{{ $paciente->nascimento->format('Y-m-d')}}"    
                    @endif
                    required>
            </div>
        </div>

        <div class="col-md-3 col-lg-3">
            <a href="{{ url('pacientes') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
            <button type="submit" class="btn btn-success">&nbsp;&nbsp;Salvar&nbsp;&nbsp;</button>
        </div>
  
      </form>

@endsection