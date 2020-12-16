@extends('templates.template1')
@section('content')
    <div>
        <h1 class="text-center mt-4 mb-4"><i class="fas fa-notes-medical"></i> Cadastro de Consultas <i class="fas fa-notes-medical"></i></h1>
    </div>

    <hr>

    <div class="text-center">
        <a href="{{ url('consultas/create') }}">
            <button type="button" class="btn btn-success">Nova Consulta</button>
        </a>
    </div>

    <br/>

    <!-- Grid / Listagem Geral -->
    <div class="container col-8 m-auto">    
        @csrf
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">Ações</th>
                <th scope="col">ID</th>
                <th scope="col">Paciente</th>
                <th scope="col">Cartão SUS</th>
                <th scope="col">Data da Consulta</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($consulta as $consultas)
                    @php
                        $paciente=$consultas->find($consultas->id)->relPacientes;
                    @endphp
                    <tr>
                    <td>
                    <a href="{{url("consultas/$consultas->id")}}" 
                        class="btn btn-light text-primary" data-toggle="tooltip" title="Exibir">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </a>
                    <a href="{{url("consultas/$consultas->id/edit")}}" 
                        class="btn btn-light text-primary" data-toggle="tooltip" title="Alterar">
                        <i class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="{{url("consultas/$consultas->id/delete")}}" 
                        class="btn btn-light text-danger" data-toggle="tooltip" title="Excluir">
                        <i class="fas fa-trash" aria-hidden="true"></i>
                    </a>
                    </td>
                    <th scope="row">{{$consultas->id}}</th>
                    <td>{{$paciente->nome}}</td>
                    <td>{{$paciente->cartao_sus}}</td>
                    <td>{{$consultas->data_consulta->format('d/m/Y h:m')}}</td>
                </tr>
                @endforeach           
            </tbody>
        </table>
    </div>

@endsection