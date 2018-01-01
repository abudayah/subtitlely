<template>
  <div id="search-filters">
    <filter-dropdown label="Genre"></filter-dropdown>
    <filter-dropdown label="Rating"></filter-dropdown>
    <filter-dropdown label="MPAA"></filter-dropdown>
    <filter-dropdown label="Order By"></filter-dropdown>
    <span class="results-found">
      <strong>{{ total }}</strong> Results found
    </span>
  </div>
</template>

<script>
import FilterDropdown from '@/components/search/FilterDropdown'

export default {
  name: 'search-filters',
  props: [
    'total'
  ],
  components: {
    FilterDropdown
  }
}
</script>

<style scoped>
.results-found{
  padding-left: 6px;
  font-size: 13px;
}
</style>
