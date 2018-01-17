<template>
  <div id="home" class="container">
    
    <div id="popularSubs" class="row">
      <movie-card
        v-for="movie in popular"
        v-bind:movie="movie"
        v-bind:key="movie.id">
      </movie-card>
    </div>
    
  </div>
</template>

<script>
import * as services from '../services'
import MovieCard from '@/components/movie/Card'

export default {
  name: 'Home',
  components: {
    MovieCard
  },
  data () {
    return {
      popular: []
    }
  },
  created () {
    this.getPopular()
    this.clearSearchBar()
  },
  methods: {
    getPopular () {
      services.movieService.find({
        query: {
          $limit: 6
        }
      }).then(result => {
        this.popular = result.data
      })
    },
    clearSearchBar () {
      document.querySelector('#searchbar input.form-control').value = ''
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>