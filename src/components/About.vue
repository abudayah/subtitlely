<template>
	<h1>{{ title }}</h1>
</template>

<script>
export default {
  name: 'About',
  data () {
    return {
      title: 'Welcome to about page :)'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1{
	color: red;
}
</style>