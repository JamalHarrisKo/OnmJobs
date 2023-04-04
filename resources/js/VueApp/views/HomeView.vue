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
      

      <!-- :pageContentID="pageContentID" (with prop from router) makes this dynamic,
       now i dont need further templates :) doesent work yet -.- -->
    <PageContent :pageContentID="$route.params.id"></PageContent>

  </main>
</template>
<script>

export default {
  name: 'App',
  props: ['pageContentID'],
  data() {
      return {
        renderComponent: true,

      }

  },
  // methods: {
  //   async forceRerender() {
  //     // Remove MyComponent from the DOM
  //     this.renderComponent = false;

	// 		// Wait for the change to get flushed to the DOM
  //     await this.$nextTick();

  //     // Add the component back in
  //     this.renderComponent = true;
  //   }
  // },



// created(){

//     this.$watch(
//       () => this.$route.params,
//       (toParams, previousParams) => {
//         // react to route changes...
//         this.$forceUpdate();  
//       }
//     )
 
// }
}
</script>