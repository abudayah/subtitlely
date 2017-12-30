<template>
  <header id="app-header">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <img src="/static/logo.png" width="140" alt="logo">
        </div>
        <div class="col-md text-right">
          <small>Subtitle Language <a href="#">Arabic</a></small>
        </div>
      </div>
    </div>
      
    <search-bar></search-bar>
    
    <div class="main-nav-wrap">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <router-link class="nav-link" :to="'/'" exact>Popular subtitles</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="'/browse'">Popular TV subtitles</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="'/browse'">Browse</router-link>
          </li>
        </ul>
      </div>
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
  padding-top: 15px;
  background-color: #f0f3f4;
  min-height: 80px;
  box-shadow: 0 1px 6px rgba(0,0,0,0.1);
}
.main-nav-wrap{
  background-color: #fff;
  padding-top: 30px;

  .nav-link{
    border-bottom: 3px solid transparent;
    color: #666;
    
    &.active{
      border-bottom: 3px solid;
      border-color: #df3e7b;
      color: #000;
    }
  }
}
</style>