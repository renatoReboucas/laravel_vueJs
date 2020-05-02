@extends('layouts.default')

@section('content')


<div class="container">

    <div class="card text-center conteudo" style="margin-top: 40px;">
        <div class="card-header">
        <h3>Visialização do Produto #{{$results->id_product}}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label>Nome</label>
                    <p>{{$results->name}}</p>
                </div>
                <div class="col">
                    <label>Descrição</label>
                    <p>{{$results->description}}</p>
                </div>
                <div class="col">
                    <label>Preço</label>
                    <p>{{$results->price}}</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label >Categoria</label>
                <p>{{$results->name_category}}</p>
                </div>
                <div class="col">
                <img src="{{asset('storage/')}}/{{$results->thumb_url}}" style="width: 100px;height: 100px;">

                </div>
            </div>
            <br>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>

    @stop
