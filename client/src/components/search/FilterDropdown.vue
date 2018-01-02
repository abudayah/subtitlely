<template>
  <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ label }}
    </button>
    <div class="dropdown-menu">
      <a v-for="(value, key) in options" class="dropdown-item" :href="'#' + key">{{ value }}</a>
    </div>
  </div>
</template>

<script>
import 'bootstrap/js/src/util'
import 'bootstrap/js/src/dropdown'

export default {
  name: 'filter-dropdown',
  props: [
    'label',
    'options'
  ]
}
</script>

<style scoped>
.btn-group{
  margin-right: 6px;
}
</style>
