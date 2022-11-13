<template>
    <div class="Main">
      <Board/>
    </div>
  </template>

  <script>
  // @ is an alias to /src
  import Board from '@/components/Board.vue'

  export default {
    name: 'BoardView',
    components: {
        Board
    }
  }
  </script>
