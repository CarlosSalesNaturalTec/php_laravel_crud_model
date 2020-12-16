@extends('templates.template1')
@section('content')
    <h2 class="text-center mt-4 mb-4">
        @if(isset($consulta)) Alterar Consulta @else Nova Consulta @endif
    </h2>

    @if(isset($consulta))
        <form name="frmEdit" method="post" action="{{ url ("consultas/$consulta->id") }}">
            @method('patch')
    @else
        <form name="frmCreate" method="post" action="{{ route('consultas.store') }}" >
    @endif

        @csrf
        <div class="col-md-3 col-lg-3">
            <legend>Registro médico</legend>
        </div>
      
        <div class="form-group">
            <label for="InputData" class="col-md-2 col-lg-1 control-label">Data</label>
            <div class="col-md-2">
                <input type="date" class="form-control" name="InputData" id="InputData" 
                    @if(isset($consulta))
                        value="{{ $consulta->data_consulta->format('Y-m-d') ?? ''}}"     
                    @endif
                    autofocus required>
            </div>
        </div>

        <div class="form-group" >
            <label for="SelectNome" class="col-md-2 col-lg-1 control-label">Paciente</label>
            <div class="col-md-6">
                <select class="form-control" name="SelectNome" id="SelectNome" required>
                    <option value="{{$consulta->relPacientes->id ?? ''}}">{{$consulta->relPacientes->nome ?? 'Selecione'}}</option>
                        @foreach($pacientes as $paciente)
                            <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                        @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <label for="InputDesc" class="col-md-2 col-lg-1 control-label">Descrição</label>
            <div class="col-md-6 col-lg-6">
                <textarea id="InputDesc" name="InputDesc" rows="4" cols="50" 
                    required>{{ $consulta->descricao ?? ''}}</textarea>
            </div>
        </div>

        <div class="col-md-3 col-lg-3">
            <a href="{{ url('consultas') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
            <button type="submit" class="btn btn-success">&nbsp;&nbsp;Salvar&nbsp;&nbsp;</button>
        </div>
  
      </form>

@endsection