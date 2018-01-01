<template>
  <div id="browse" class="container">

    <h4 v-show="query">Search results for: {{query}}<hr></h4>
    
    <search-filters v-bind:total="total"></search-filters>
    
    <hr>
    
    <div id="browse" class="row">
      <movie-card
        v-for="movie in results"
        v-bind:movie="movie"
        v-bind:key="movie.id">
      </movie-card>
    </div>
    
  </div>
</template>

<script>
import * as services from '../services'
import SearchFilters from '@/components/search/filters'
import MovieCard from '@/components/movie/Card'

export default {
  name: 'Browse',
  components: {
    MovieCard,
    SearchFilters
  },
  data () {
    return {
      query: '',
      total: 0,
      results: []
    }
  },
  created () {
    this.getSearchResults()
  },
  watch: {
    // call again the method if the route changes
    '$route.query.q': 'getSearchResults'
  },
  methods: {
    getSearchResults () {
      this.query = this.$route.query.q
      if (typeof this.query !== 'undefined') {
        services.movieService.find({
          query: {
            title: {
              $like: '%' + this.query + '%'
            },
            $limit: 9,
            $sort: {
              created_at: -1
            }
          }
        }).then(result => {
          this.results = result.data
          this.total = result.total
        })
      } else {
        services.movieService.find({
          query: {
            $limit: 9,
            $sort: {
              created_at: -1
            }
          }
        }).then(result => {
          this.results = result.data
          this.total = result.total
        })
      }
    }
  }
}
</script>

<style scoped>
</style>