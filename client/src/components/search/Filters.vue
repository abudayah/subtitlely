<template>
  <div id="search-filters">
    <filter-dropdown filter="genre" label="Genre" v-bind:options="genres"></filter-dropdown>
    <filter-dropdown filter="imdb_rating" label="Rating"></filter-dropdown>
    <filter-dropdown filter="mpaa" label="MPAA" v-bind:options="mpaa"></filter-dropdown>
    <filter-dropdown filter="order" label="Order By"></filter-dropdown>
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
    mpaa () {
      let mpaa = []
      STATIC.MPAA.forEach((el) => {
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
