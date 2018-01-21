<template>
  <nav aria-label="Page navigation">
    <paginate
      :initial-page="paginate.initialPage"
      :page-count="paginate.pageCount"
      :page-range="3"
      :margin-pages="1"
      :click-handler="navigate"
      :container-class="'pagination justify-content-center'"
      :page-class="'page-item'"
      :page-link-class="'page-link'"
      :prev-class="'page-item'"
      :prev-link-class="'page-link'"
      :next-class="'page-item'"
      :next-link-class="'page-link'">
    </paginate>
  </nav>
</template>

<script>
import Paginate from 'vuejs-paginate'

export default {
  name: 'pagination',
  props: [
    'paginate'
  ],
  components: {
    Paginate
  },
  methods: {
    navigate (pageNum) {
      let newQuery = {}
      newQuery['page'] = pageNum
      this.$router.push({ query: Object.assign({}, this.$route.query, newQuery) })
    }
  }
}
</script>
