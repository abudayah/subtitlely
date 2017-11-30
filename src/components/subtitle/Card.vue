<template>
	<div class="col-md-4">
		<router-link class="card card-subtitle" :to="{ name: 'view', params: { id: subtitle.id }}">
			<div class="row no-gutters">
				<div class="col-sm-5">
					<img :src="require('@/assets/' + subtitle.image_uri)" width="110" />
				</div>
				<div class="col-sm-7">
					<h4>{{ subtitle.title }}</h4>
					<p class="text-muted">{{ subtitle.release_date }}</p>
					<div><strong>{{ subtitle.total_subtitles }}</strong> Subtitles</div>
					<div><strong>{{ subtitle.total_languages }}</strong> Languages</div>
				</div>
			</div>
		</router-link>
	</div>
</template>

<script>
export default {
  name: 'subtitle-card',
  props: ['subtitle']
}
</script>

<style lang="scss" scoped>
.card-subtitle{
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
		font-weight: bold;
	}
}
</style>
