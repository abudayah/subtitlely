<template>
  <header id="app-header">
    <div class="container">
      <div class="row">
        <div class="col-md">
          SubtitleVue
        </div>
        <div class="col-md text-right">
          Subtitle Language <a href="#">Arabic</a>
        </div>
      </div>
      
      <ul class="nav">
        <li class="nav-item">
          <router-link class="nav-link" :to="'/'">Popular subtitles</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="'/browse'">Browse</router-link>
        </li>
      </ul>
      
    </div>
  </header>
</template>

<script>
export default {
  name: 'app-header'
}
</script>

<style lang="scss" scoped>
#app-header{
  padding-top: 20px;
	background-color: #f0f3f4;
  min-height: 80px;
}
.nav-link{
  &.active{
    font-weight: bold
  }
}
</style>