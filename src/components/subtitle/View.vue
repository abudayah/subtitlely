<template>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-sm-4">
        <img :src="require('@/assets/' + subtitle.image_uri)" width="350" />
      </div>
      <div class="col-sm-7">
        <h4>{{ subtitle.title }}</h4>
        <p class="text-muted">{{ subtitle.release_date }}</p>
        <div><strong>{{ subtitle.total_subtitles }}</strong> Subtitles</div>
        <div><strong>{{ subtitle.total_languages }}</strong> Languages</div>
        <br>
        <a href="#" class="btn btn-info">Download (Arabic)</a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'subtitle-view',
  mounted () {
    this.fetchSingle()
  },
  data () {
    return {
      subtitle: []
    }
  },
  methods: {
    fetchSingle () {
      axios.get('http://localhost:8000/api.php', {
        params: {
          get: 'single',
          id: this.$route.params.id
        }
      })
      .then(function (response) {
        this.subtitle = response.data
      }.bind(this))
      .catch(function (error) {
        console.log(error)
      })
    }
  }
}
</script>

<style lang="scss">

</style>
