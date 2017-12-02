<template>
  <form id="searchbar" v-on:submit="search()" @submit.prevent>
    <div class="input-group">
      <input class="form-control"
      autofocus autocomplete="off"
      placeholder="Search for.."
      v-model="searchQuery">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Search</button>
      </span>
    </div>
  </form>
</template>

<script>
export default {
  name: 'search-bar',
  data () {
    return {
      searchQuery: ''
    }
  },
  methods: {
    search () {
      var value = this.searchQuery && this.searchQuery.trim()
      if (!value) {
        return
      }
      this.$router.push({path: 'browse', query: {q: value, get: 'search'}})
    }
  }
}
</script>

<style lang="scss" scoped>
#searchbar{
  margin: 15px 0;
}
</style>