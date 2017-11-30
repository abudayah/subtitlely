<template>
  <form id="searchbar" v-on:submit="search()" @submit.prevent>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Search</button>
      </span>
    </div>
  </form>
</template>

<script>
export default {
  name: 'search-bar',
  methods: {
    search () {
      alert('thus submit was prevented!')
    }
  }
}
</script>

<style lang="scss" scoped>
#searchbar{
  margin: 15px 0;
}
</style>