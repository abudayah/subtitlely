<template>
  <form id="searchbar" v-on:submit="search()" @submit.prevent>
    <input class="form-control form-control-lg"
    autofocus autocomplete="off"
    placeholder="Search for.."
    v-model="searchQuery">
    <button class="btn btn-link" type="submit"><font-awesome-icon icon="search" /></button>
  </form>
</template>

<script>
import fontawesome from '@fortawesome/fontawesome'
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
// import brands from '@fortawesome/fontawesome-free-brands'
import { faSearch } from '@fortawesome/fontawesome-free-solid'

fontawesome.library.add(faSearch)

export default {
  name: 'search-bar',
  components: { FontAwesomeIcon },
  data () {
    return {
      searchQuery: this.$route.query.q
    }
  },
  methods: {
    search () {
      var value = this.searchQuery && this.searchQuery.trim()
      if (!value) {
        return
      }
      this.$router.push({
        path: 'browse',
        query: {
          q: value
        }
      })
    }
  }
}
</script>

<style lang="scss" scoped>
#searchbar{
  max-width: 860px;
  position: relative;
  right: 0;
  left: 0;
  margin: 0 auto;
  top: 18px;
  
  .form-control{
    box-shadow: 0 1px 3px rgba(0,0,0,.1);
  }
  .btn{
    position: absolute;
    font-size: 20px;
    right: 0;
    top: 0;
    height: 48px;
    line-height: 100%;
    
    .fa-search{
      color: #999
    }
  }
}
</style>