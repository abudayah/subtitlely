<template>
  <div id="search-filters">
    <filter-dropdown filter="genre" label="Genre" v-bind:options="genres"></filter-dropdown>
    <filter-dropdown filter="rating" label="Rating" v-bind:options="rating"></filter-dropdown>
    <filter-dropdown filter="mpaa" label="MPAA" v-bind:options="mpaa"></filter-dropdown>
    <filter-dropdown filter="order" label="Order By" v-bind:options="sorting"></filter-dropdown>
    <span class="results-found">
      <strong>{{ total }}</strong> Results found <span v-show="selectedFilters">(<router-link :to="{ query: { q: this.$route.query.q } }">clear filters</router-link>)</span>
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
    rating () {
      return ['+1', '+2', '+3', '+4', '+5', '+6', '+7', '+8', '+9'].reverse()
    },
    mpaa () {
      let mpaa = []
      STATIC.MPAA.forEach((el) => {
        mpaa.push(el.label)
      })
      return mpaa
    },
    sorting () {
      return ['Release: Latest', 'Release: Oldest']
    },
    selectedFilters () {
      if (this.$route.query.hasOwnProperty('genre') || this.$route.query.hasOwnProperty('rating') || this.$route.query.hasOwnProperty('mpaa') || this.$route.query.hasOwnProperty('order')) {
        return true
      } else {
        return false
      }
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
