<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item" v-bind:class="{'disabled':products.current_page == 1}">
      <a class="page-link" href="#" tabindex="-1" v-on:click="getProducts(products.prev_page_url)">voltar</a>
    </li>

    <li class="page-item" v-bind:class="{'disabled':products.current_page == products.last_page}">
      <a class="page-link" href="#" v-on:click="getProducts(products.next_page_url)">proximo</a>
    </li>
  </ul>
</nav>
