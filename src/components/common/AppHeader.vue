<template>  
  <header id="app-header">
		<router-link v-bind:to="'/'">Home</router-link>
		<router-link v-bind:to="'/about'">About</router-link>		
  </header>
</template>

<script>
export default {
  name: 'app-header'
}
</script>

<style lang="scss" scoped>
#app-header{
	background-color: #eee;
}
</style>