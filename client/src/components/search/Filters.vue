<template>
  <div id="search-filters">
    <filter-dropdown label="Genre" v-bind:options="genres"></filter-dropdown>
    <filter-dropdown label="Rating"></filter-dropdown>
    <filter-dropdown label="MPAA" v-bind:options="mpaa"></filter-dropdown>
    <filter-dropdown label="Order By"></filter-dropdown>
    <span class="results-found">
      <strong>{{ total }}</strong> Results found
    </span>
  </div>
</template>

<script>
import FilterDropdown from '@/components/search/FilterDropdown'
import STATIC from '../../services/static'

export default {
  name: 'search-filters',
  data () {
    return {
      genres: STATIC.Genres
    }
  },
  props: [
    'total'
  ],
  components: {
    FilterDropdown
  },
  computed: {
    mpaa: function () {
      let mpaa = []
      STATIC.MPAA.forEach(function (el) {
        mpaa.push(el.label)
      })
      return mpaa
    }
  }
}
</script>

<style scoped>
.results-found{
  padding-left: 6px;
  font-size: 13px;
}
</style>
