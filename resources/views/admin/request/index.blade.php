@extends('layout.site')
@section('titulo','Requisições')

@section('conteudo')
<div class="container">
  <h3 class="center">Lista de Requisições</h3>
  <table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
      </tr>
    </thead>
    <tbody>
        @foreach($registros as $registro)
        <tr>
          <td>{{ $registro->id }}</td>
          <td>{{ $registro->name }}</td>
          <td>{{ $registro->price }}</td>
          <td>
            <button type="button" class="btn btn-primary" href="{{route(admin.request.editar, $registro->id)}}">Editar</button>
            <button type="button" class="btn btn-danger" href="{{route(admin.request.deletar, $registro->id)}}">Deletar</button>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="container">
    <button  type="button" class="btn btn-success"><a class="text-white" href="{{route('admin.request.adicionar') }}">Adicionar</a></button>
  </div>

</div>

@endsection