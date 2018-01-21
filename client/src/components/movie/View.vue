<template>
  <div class="container movie-view">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-sm-7">
          <div class="row no-gutters">
            <div class="col-sm-4">
              <img :src="imageUrl" class="img-fluid" />
            </div>
            <div class="col-sm-8">
              <div class="movie-info">
                <h1>{{ movie.title }}</h1>
                <div class="movie-status"><a href="#">{{ movie.total_languages }} Language / {{ movie.total_movies }} movies</a></div>
                
                <div class="row movie-info-grid">
                  <div class="col-sm-6">
                    <span>Release Date</span>
                    <p>{{ movie.release_date }}</p>
                  </div>
                  <div class="col-sm-6">
                    <span>IMDB</span>
                    <p>{{ movie.imdb_rating }}/10</p>
                  </div>
                  <div class="col-sm-6">
                    <span>Genre</span>
                    <p>{{ movie.genre }}</p>
                  </div>
                  <div class="col-sm-6">
                    <span>MPAA</span>
                    <p>{{ movie.mpaa }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 download-area">
          <span>Download the best accurate movie for Arabic language (<a href="#">other languages</a>)</span>
          <download-button></download-button>
        </div>
      </div>
    </div>
    
    <revisions></revisions>
  </div>
</template>

<script>
import * as services from '../../services'
import DownloadButton from '@/components/movie/DownloadButton'
import Revisions from '@/components/movie/Revisions'

export default {
  name: 'movie-view',
  components: {
    DownloadButton,
    Revisions
  },
  mounted () {
    this.fetchSingle()
  },
  data () {
    return {
      id: this.$route.params.id,
      movie: []
    }
  },
  computed: {
    imageUrl () {
      return (this.movie.image_url) ? `http://localhost:3030/images/${this.movie.image_url}` : 'http://via.placeholder.com/181x268'
    }
  },
  methods: {
    fetchSingle () {
      if (typeof this.id !== 'undefined') {
        services.movieService.find({
          query: {
            id: this.id
          }
        }).then(result => {
          this.movie = result.data[0]
        })
      }
      // @TODO what about this ?
      // services.movieService.get(this.$route.params.id).then(result => {
      //   this.movie = result.data
      //   console.log(JSON.stringify(result))
      // })
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
