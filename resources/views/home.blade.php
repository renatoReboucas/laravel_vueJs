@extends('layouts.default')

@section('content')
<div id="app">
 @include('layouts.menu')

    <div class="container">
        <table class="table">
  <thead>
    <tr>
        <th >Nome</th>
        <th >descricao</th>
        <th >Preço</th>
        <th>Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
          <a href="#" data-toggle="modal" data-target="#crud">editar</a>
          <a class="text-danger" href="#" data-toggle="modal" data-target="#crud">Deletar</a>
      </td>
    </tr>
        <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
          <a href="#" data-toggle="modal" data-target="#crud">editar</a>
          <a class="text-danger" href="#" data-toggle="modal" data-target="#crud">Deletar</a>
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
@include('includes.modal')
  <script  src="js/app.product.js"></script>
@endsection
