<template>
	<div class="col-md-4">
		<router-link class="card card-movie" :to="{ name: 'view', params: { id: movie.id }}">
			<div class="row no-gutters">
				<div class="col-sm-5">
					<img :src="imageUrl" class="img-fluid" />
					<!-- <img :src="require('@/assets/' + movie.image_uri)" class="img-fluid" /> -->
				</div>
				<div class="col-sm-7 info-col">
					<h4>{{ movie.title }}</h4>
					<p class="text-muted">{{ movie.release_date }}</p>
					<div><strong>{{ movie.total_subtitles }}</strong> Subtitles</div>
					<div><strong>{{ movie.total_languages }}</strong> Languages</div>
				</div>
			</div>
		</router-link>
	</div>
</template>

<script>
export default {
  name: 'movie-card',
  props: ['movie'],
  computed: {
    imageUrl () {
      return (this.movie.image_url) ? `http://localhost:3030/images/${this.movie.image_url}` : 'http://via.placeholder.com/155x230'
    }
  }
}
</script>

<style lang="scss" scoped>
.card-movie{
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
	color: inherit;
	font-size: 14px;
  margin-bottom: 30px;
	
	&:hover{
		color: inherit;
		text-decoration: none;
		box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
		
		h4{
			text-decoration: underline;
		}
	}
	
	h4{
		font-size: 18px;
		margin: 8px 0 0;
    color: #111;
	}
}
.info-col{
	padding-left: 10px;
  font-size: 13px;
  color: #666
}
</style>
