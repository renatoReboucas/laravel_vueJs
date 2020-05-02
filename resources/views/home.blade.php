@extends('layouts.default')

@section('content')

<div id="products">

    <div class="container">
        <div v-if="message == null" class="alert alert-success" style="display:none" role="alert"></div>
        <div v-else class="alert alert-success" role="alert">
            @{{message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row">
            <div class="col">
                <h1 style="margin-top:10px;">Produtos</h1>
            </div>
        </div>
        <div class="card text-center conteudo">
            <div class="card-header">

                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <button class="btn btn-success" data-toggle="modal" data-target="#crud">Criar +</button>
                        </div>
                    </div>
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <i class="fas fa-file-csv"></i>
                            </button>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="search" v-model="filterName" v-on:keyup="getProducts"  class="form-control" placeholder="Filtre pelo Nome">
                        </div>

                    </div>
                </div>
                <br/>


            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th >Nome</th>
                                <th >Descricao</th>
                                <th >Categoria</th>
                                <th >Preço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="product in products.data ">
                                <th>@{{product.name}}</th>
                                <td>@{{product.description}}</td>
                                <td>@{{product.name_category}}</td>
                                <td>@{{product.price | formatReal}}</td>
                                <td>
                                    <a href="#" v-on:click="setProductsEdt(product)" data-toggle="modal" data-target="#crud">Editar</a>
                                    <a class="text-danger deletar" v-on:click="destroy(product.id_product)" href="#" >Deletar</a>
                                    {{-- <a href="#" v-on:click="show(product.id_product)">Visualizar</a> --}}
                                    <a v-bind:href="'/products/show/' + product.id_product">Visualizar</a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>

    </div>
    @include('includes.modal')
</div>
<script  src="js/app.product.js"></script>

@stop
