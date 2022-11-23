<template>
      <List/>
</template>

  <script>
  // @ is an alias to /src
  import List from '@/components/board/List.vue'

  export default {
    name: 'BoardList',
    components: {
      List
    }
  }
  </script>
  <style lang="scss">
    @import "@/assets/scss/main";
  </style>
