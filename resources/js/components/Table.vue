<template>
  <div>
    <a href="#">Criar</a>

    <table class="table">
  <thead>
    <tr>
        <th v-for="titulo in titulos">{{titulo}}</th>

        <th>Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>

</template>

<script>
    export default {
      props:['titulos']
    }
</script>
