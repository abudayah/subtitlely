<template>
  <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ label }}
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
</template>

<script>
import 'bootstrap/js/src/util'
import 'bootstrap/js/src/dropdown'

export default {
  name: 'filter-dropdown',
  props: ['label']
}
</script>

<style scoped>
.btn-group{
  margin-right: 6px;
}
</style>
