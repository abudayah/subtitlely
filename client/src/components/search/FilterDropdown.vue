<template>
  <div class="btn-group">
    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{ ActiveLabel() }}
    </button>
    <div class="dropdown-menu">
      <router-link v-for="value in options" class="dropdown-item" active-class="" :key="value" :to="querystring(value)">{{ value }}</router-link>
    </div>
  </div>
</template>

<script>
import 'bootstrap/js/src/util'
import 'bootstrap/js/src/dropdown'

export default {
  name: 'filter-dropdown',
  props: [
    'filter',
    'label',
    'options'
  ],
  methods: {
    querystring (value) {
      let newQuery = {}
      newQuery[this.filter] = value
      newQuery['page'] = 1
      return { query: Object.assign({}, this.$route.query, newQuery) }
    },
    ActiveLabel () {
      if (this.$route.query[this.filter]) {
        return this.$route.query[this.filter]
      } else {
        return this.label
      }
    }
  }
}
</script>

<style scoped>
.btn-group{
  margin-right: 6px;
}
</style>
