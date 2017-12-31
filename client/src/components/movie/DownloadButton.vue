<template>
  <div class="download-component">
    <a href="#" class="btn btn-download btn-block btn-light btn-lg">Download (Arabic)</a>
  </div>
</template>

<script>
export default {
  name: 'download-button'
}
</script>

<style lang="scss">
.download-component{
  margin: 40px auto;
  max-width: 80%;

  .btn-download{
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border: 0.5px solid #eee;
  }
}
</style>
