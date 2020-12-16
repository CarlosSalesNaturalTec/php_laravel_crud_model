@extends('templates.template1')
@section('content')

<div>
    <h1 class="text-center mt-4 mb-4"><i class="fas fa-hospital-user"></i> Cadastro de Pacientes <i class="fas fa-hospital-user"></i></h1>
</div>

<hr>

<div class="text-center">
    <a href="{{ url('pacientes/create') }}">
        <button type="button" class="btn btn-success">Novo Paciente</button>
    </a>
</div>

<br/>

<!-- Grid / Listagem Geral -->
<div class="container col-8 m-auto">
    @csrf
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Ações</th>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cartão SUS</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Última Atualização</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paciente as $pacientes)
                <tr>

                <td>
                  <a href="{{url("pacientes/$pacientes->id")}}" 
                    class="btn btn-light text-primary" data-toggle="tooltip" title="Exibir">
                      <i class="fas fa-search" aria-hidden="true"></i>
                  </a>
                  <a href="{{url("pacientes/$pacientes->id/edit")}}" 
                    class="btn btn-light text-primary" data-toggle="tooltip" title="Alterar">
                      <i class="fas fa-edit" aria-hidden="true"></i>
                  </a>
                  <a href="{{url("pacientes/$pacientes->id/delete")}}" 
                    class="btn btn-light text-danger" data-toggle="tooltip" title="Excluir">
                      <i class="fas fa-trash" aria-hidden="true"></i>
                  </a>
                </td>

                <th scope="row">{{$pacientes->id}}</th>
                <td>{{$pacientes->nome}}</td>
                <td>{{$pacientes->cartao_sus}}</td>
                <td>{{$pacientes->nascimento->format('d/m/Y')}}</td>
                <td>{{$pacientes->updated_at->format('d/m/Y h:m:s')}}</td>
              </tr>
            @endforeach
          
          
        </tbody>
      </table>
</div>

@endsection