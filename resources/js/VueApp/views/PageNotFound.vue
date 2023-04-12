<script setup>
</script>
<template>
  <main>
<div class="fourOFour">
   <h2>Sorry, diese Seite scheint es nicht zu geben...</h2>
</div>
  </main>
</template>
<script>
import axios from 'axios'
export default {
  name: 'App',
  props: ['pageName', 'map', 'HomePage'],
  data() {
    return {

    }
  },
  mounted() {

  },
}
</script>
<style>
.fourOFour{
    padding: 2rem;
    text-align: center;
    min-height: 300px;
}
</style>