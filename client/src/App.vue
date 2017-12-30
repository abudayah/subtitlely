<template>
  <div id="app">
    <app-header></app-header>
    
    <div class="main-content">
      <router-view/>
    </div>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style lang="scss">
@import "./assets/scss/_imports";

.main-content{
  padding: 30px 0;
}
</style>
