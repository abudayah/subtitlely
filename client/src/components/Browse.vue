<template>
  <div id="browse" class="container">
    <h4 v-show="q">Search results for: {{q}}<hr></h4>
    <search-filters v-bind:total="total"></search-filters>
    <hr>
    
    <div id="browse" class="row">
      <movie-card
        v-for="movie in results"
        v-bind:movie="movie"
        v-bind:key="movie.id">
      </movie-card>
    </div>
    
    <pagination v-bind:paginate="paginate"></pagination>
  </div>
</template>

<script>
import * as services from '../services'
import SearchFilters from '@/components/search/filters'
import MovieCard from '@/components/movie/Card'
import Pagination from '@/components/common/Pagination'

export default {
  name: 'Browse',
  components: {
    MovieCard,
    SearchFilters,
    Pagination
  },
  data () {
    return {
      q: null,
      genre: null,
      rating: null,
      mpaa: null,
      order: null,
      total: 0,
      limit: 9,
      paginate: {
        pageCount: 0,
        initialPage: 0
      },
      results: []
    }
  },
  created () {
    this.getSearchResults()
    this.paginate.initialPage = this.page - 1
  },
  watch: {
    // call again the method if the route changes
    '$route.query': 'getSearchResults'
  },
  computed: {
    page () {
      return this.$route.query.page || 1
    }
  },
  methods: {
    searchQuery () {
      this.q = this.$route.query.q
      this.genre = this.$route.query.genre
      this.rating = this.$route.query.rating
      this.mpaa = this.$route.query.mpaa
      this.order = this.$route.query.order
      let query = {}
      query['$limit'] = this.limit
      query['$sort'] = {}
      query['$sort']['created_at'] = -1
      if (this.q) {
        query['title'] = {}
        query['title']['$like'] = `%${this.q}%`
      }
      if (this.genre) {
        query['genre'] = {}
        query['genre']['$like'] = `%${this.genre}%`
      }
      if (this.rating) {
        query['imdb_rating'] = {}
        query['imdb_rating']['$gte'] = this.rating.replace('+', '')
      }
      if (this.mpaa) {
        query['mpaa'] = this.mpaa
      }
      if (this.order) {
        query['$sort']['release_date'] = (this.order === 'Release: Latest') ? -1 : 1
      }
      if (this.page) {
        query['$skip'] = this.page * 9
      }
      return {query: query}
    },
    getSearchResults () {
      if (Object.keys(this.$route.query).length !== 0) {
        // Search
        services.movieService.find(this.searchQuery()).then(result => {
          this.results = result.data
          this.total = result.total
          this.pagination(result.limit, result.total)
        })
      } else {
        // Get latest
        services.movieService.find({
          query: {
            $limit: this.limit,
            $sort: {
              created_at: -1
            }
          }
        }).then(result => {
          this.results = result.data
          this.total = result.total
          this.pagination(result.limit, result.total)
        })
      }
    },
    pagination (limit = this.limit, total = 0) {
      this.paginate.pageCount = Math.floor(total / limit)
      console.log(this.paginate)
      return this.paginate
    }
  }
}
</script>

<style scoped>
</style>