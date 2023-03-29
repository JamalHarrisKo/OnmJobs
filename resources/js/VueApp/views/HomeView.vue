<script setup>
// import TheWelcome from '../components/TheWelcome.vue'
import PageContent from '../components/PageContent.vue'

</script>

<template>
  <main>
    <!-- Problem repetetive code
      Problem differentiate page content inbetween pages
      Solution: add content attribute to the content call: 
    Also move The Company.vue content to homeView.vue -> even less repetitive code, since other views wont be ne
    needed
    -->

    <!-- made dynamic by passing page id from router, less code -->
    <!-- problem:
    <PageContent pageContentID=this.pageContentID></PageContent> -->
      <!-- fix -->
      
    <PageContent :pageContentID=1></PageContent>

  </main>
</template>
<script>

export default {
  name: 'App',
  props: ['pageContentID'],
  // data() {
  //     return {
  //     }

  // },





}
</script>