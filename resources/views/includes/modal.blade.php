<div class="modal fade" id="crud" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 v-if="product.id != null" class="modal-title" id="staticBackdropLabel">Ediçao Produto</h5>
                <h5 v-else class="modal-title" id="staticBackdropLabel">Criaçao Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" v-model="product.name" v-bind:value="product.name" class="form-control" placeholder="Entre com o Nome*" required>
                        </div>
                        <div class="col">
                            <input type="number" v-model="product.price" v-bind:value="product.price" class="form-control" placeholder="Entre com o preço*" required>
                        </div>
                        <div class="col">
                            <select class="form-control" id="category"  v-model="product.id_category" required>
                                <option value="0">Selecione uma Categoria*</option>
                                <option  v-for="category in categories"
                                :key="category.id"
                                v-bind:value="category.id"

                                :selected="category.id === product.id_category ? 'selected': ''"
                                >
                                @{{category.name}}

                            </option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <div class="row">

                    <div class="col">
                        <div class="custom-file">
                            <input type="file" id="file" name="file" ref="file" v-on:change="setFile()" >
                            {{-- <label class="custom-file-label" for="inputGroupFile01">Imagem</label> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea v-model="product.description" v-bind:value="product.description" class="form-control" placeholder="Entre com a Descricao*" required></textarea>
                            {{-- <input type="text" v-model="product.description" v-bind:value="product.description" class="form-control" placeholder="Entre com a Descricao*"> --}}
                        </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <button v-if=" product.id != null " type="button" v-on:click="edtProducts()" class="btn btn-warning" data-dismiss="modal">Atualizar</button>
                <button v-else type="button" v-on:click="create()" class="btn btn-warning" data-dismiss="modal">Enviar</button>
            </form>
        </div>
    </div>
</div>
</div>
