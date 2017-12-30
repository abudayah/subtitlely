<template>
  <div id="home" class="container">
    
    <div id="popularSubs" class="row">
      <subtitle-card
        v-for="subtitle in popular"
        v-bind:subtitle="subtitle"
        v-bind:key="subtitle.id">
      </subtitle-card>
    </div>
    
  </div>
</template>

<script>
import * as services from '../services'
import SubtitleCard from '@/components/subtitle/Card'
// import axios from 'axios'

export default {
  name: 'Home',
  components: {
    SubtitleCard
  },
  data () {
    return {
      popular: []
    }
  },
  created () {
    this.getPopular()
  },
  methods: {
    getPopular () {
      services.movieService.find({
        query: {
          $limit: 10
        }
      }).then(result => {
        this.popular = result.data
        console.log(JSON.stringify(result))
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>