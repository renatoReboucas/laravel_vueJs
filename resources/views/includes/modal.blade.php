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
        <div class="row">
            <div class="col">
                <input type="text" v-model="product.name" class="form-control" placeholder="Entre com o Nome">
            <span>@{{product.name}}</span>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
