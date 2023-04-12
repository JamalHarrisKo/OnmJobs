<script setup>
import PageContent from '../components/PageContent.vue'
</script>
<template>
  <main>
    <PageContent :pageName="$route.params.pageName" v-if="this.pageContentID" :pageContentID="this.pageContentID"
      :key="this.map.get(this.pageName)"></PageContent>
  </main>
</template>
<script>
import axios from 'axios'
export default {
  name: 'App',
  props: ['pageName', 'map', 'HomePage'],
  data() {
    return {
      renderComponent: true,
      pageSrcURL: 'http://localhost:1337/api/pages/',
      // map: this.map,
      pageContentID: ((this.HomePage) ? this.HomePage : this.map.get(this.$route.params.pageName))
    }
  },
  mounted() {
    //get page id from name for pretty url
    axios.get(this.pageSrcURL).then((response) => {
      response.data.data.forEach((el) => {
        // fix reloading pages with URLSlugs
        if (el.attributes.PageName == this.$route.params.pageName || el.attributes.URLSlug == this.$route.params.pageName) {
          this.pageContentID = el.id;
        }
      })
    }
    )
    //404 Page
    if (this.$route.params.pageName != null && !this.map.get(this.$route.params.pageName)) {
      window.location = `/404`
    }
  },

}
</script>