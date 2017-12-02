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
import SubtitleCard from '@/components/subtitle/Card'
import axios from 'axios'

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
      axios.get('http://localhost:8000/api.php', {
        params: {
          get: 'list',
          count: 9
        }
      })
      .then(function (response) {
        this.popular = response.data
      }.bind(this))
      .catch(function (error) {
        console.log(error)
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>