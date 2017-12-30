<template>
  <div class="container subtitle-view">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-sm-7">
          <div class="row no-gutters">
            <div class="col-sm-4">
              <img :src="require('@/assets/' + subtitle.image_uri)" class="img-fluid" />
            </div>
            <div class="col-sm-8">
              <div class="movie-info">
                <h1>{{ subtitle.title }}</h1>
                <div class="movie-status"><a href="#">{{ subtitle.total_languages }} Language / {{ subtitle.total_subtitles }} subtitles</a></div>
                
                <div class="row movie-info-grid">
                  <div class="col-sm-6">
                    <span>Release Date</span>
                    <p>{{ subtitle.release_date }}</p>
                  </div>
                  <div class="col-sm-6">
                    <span>IMDB</span>
                    <p>8.9/10</p>
                  </div>
                  <div class="col-sm-6">
                    <span>Genre</span>
                    <p>Action, Drama</p>
                  </div>
                  <div class="col-sm-6">
                    <span>MPAA</span>
                    <p>R</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 download-area">
          <span>Download the best accurate subtitle for Arabic language (<a href="#">other languages</a>)</span>
          
          <download-button></download-button>
          
        </div>
      </div>
    </div>
    
    <revisions></revisions>
  </div>
</template>

<script>
import axios from 'axios'
import DownloadButton from '@/components/subtitle/DownloadButton'
import Revisions from '@/components/subtitle/Revisions'

export default {
  name: 'subtitle-view',
  components: {
    DownloadButton,
    Revisions
  },
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

<style lang="scss" scoped>
.movie-info{
  font-size: 12px;
  padding: 15px;
  
  &-grid{
    span{
      color: #666
    }
  }
  
  .movie-status{
    font-size: 14px;
    margin-bottom: 20px;
  }
  
  h1{
    font-size: 30px;
    margin: 0
  }
}
.download-area{
  background: #f0f3f4;
  color: #666;
  padding: 15px;
  font-size: 14px;
}
</style>
