<template>
  <table class="revisions table table-striped">
    <thead>
      <tr>
        <th scope="col">Language</th>
        <th scope="col">Release</th>
        <th scope="col">Release type</th>
        <th scope="col">Owner</th>
        <th scope="col">Votes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Arabic</th>
        <td><a href="#">The.Wolf.of.Wall.Street.2013.720p.BluRay.x264-YIFY</a></td>
        <td>Abudayah</td>
        <td>123 / 39</td>
      </tr>
      <tr>
        <th scope="row">Arabic</th>
        <td><a href="#">The.Wolf.of.Wall.Street.2013.1080p.BluRay.x264-YIFY</a></td>
        <td>Hussam</td>
        <td>123 / 39</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  name: 'revisions'
}
</script>

<style lang="scss">
.revisions.table{
  margin-top: 30px;
  font-size: 14px;
}
</style>
