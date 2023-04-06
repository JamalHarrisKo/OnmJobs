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

    <PageContent :pageName="$route.params.pageName" v-if=(this.pageContentID) :pageContentID="this.pageContentID"
      :key="this.map.get(this.pageName)"></PageContent>
  </main>
</template>
<script>
import axios from 'axios'

export default {
  name: 'App',
  props: ['pageContentID', 'pageName', 'map'],
  data() {
    return {
      renderComponent: true,
      pageSrcURL: 'http://localhost:1337/api/pages/',
      map: this.map,
      pageContentID: this.map.get(this.$route.params.pageName)
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

  mounted() {
    //get page id from name for pretty url
    axios.get(this.pageSrcURL).then((response) => {
      response.data.data.forEach((el) => {
        console.log(el.attributes.PageName)
        console.log(el.attributes.URLSlug)
        // fix reloading pages with URLSlugs
        if (el.attributes.PageName == this.$route.params.pageName || el.attributes.URLSlug == this.$route.params.pageName) {
          this.pageContentID = el.id;
        }
      })
    }
    )
  },

  created() {

    // this.$watch(
    //   () => this.$route.params,
    //   (toParams, previousParams) => {
    //     // react to route changes...
    //     this.$forceUpdate();  
    //   }
    // )
    console.log(this.map.get(this.pageName))

  }

}
</script>