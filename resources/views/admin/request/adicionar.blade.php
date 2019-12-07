@extends('layout.site')

@section('titulo','Requisições')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Requisições</h3>
    <div class="row">
      <form class="" action="{{route('admin.request.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.request._form')
            <button  type="submite" class="btn btn-success">Salvar</button>
      </form>
    </div>
  </div>




@endsection
