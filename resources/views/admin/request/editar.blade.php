@extends('layout.site')

@section('titulo','Requisições')

@section('conteudo')
  <div class="container">
    <h3 class="center">Editar Requisições</h3>
    <div class="row">
      <form class="" action="{{route('admin.request.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="method" value="put">
            @include('admin.request._form')
            <button  type="button" class="btn btn-success"><a class="text-white" href="{{route('admin.request.atualizar') }}">Atualizar</a></button>
      </form>
    </div>
  </div>




@endsection
