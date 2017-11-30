<template>
  <div id="browse" class="container">

    <h4 v-if="query">Search results for: {{query}}</h4>
    <h4 v-else>Loading..</h4>
    
    <br>
    
    <div id="browse" class="row">
      <subtitle-card
        v-for="subtitle in results"
        v-bind:subtitle="subtitle"
        v-bind:key="subtitle.id">
      </subtitle-card>
    </div>
    
  </div>
</template>

<script>
import SubtitleCard from '@/components/subtitle/Card'
import axios from 'axios'

export default {
  name: 'Browse',
  components: {
    SubtitleCard
  },
  data () {
    return {
      query: '',
      results: []
    }
  },
  created () {
    this.getSearchResults()
  },
  watch: {
    // call again the method if the route changes
    '$route': 'getSearchResults'
  },
  methods: {
    getSearchResults () {
      axios.get('http://localhost:8000/api.php', {
        params: {
          get: 'search',
          q: this.$route.query.q
        }
      })
      .then(function (response) {
        this.results = response.data
        this.query = this.$route.query.q
      }.bind(this))
      .catch(function (error) {
        console.log(error)
      })
    }
  }
}
</script>

<style scoped>
</style>