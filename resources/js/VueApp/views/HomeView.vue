<script setup>
// import { classBody } from '@babel/types';
import PageContent from '../components/PageContent.vue'
</script>
<template>
  <main>
    <PageContent :pageName="$route.params.pageName" v-if="this.pageContentID" :pageContentID="this.pageContentID"
      :key="$route.params.pageName"></PageContent>
    <div v-else>
      <div class="fourOFour">
        <h2>Sorry, diese Seite scheint es nicht zu geben...</h2>
      </div>
    </div>
  </main>
  <div id="applicationMessage_modal_container">
    <div class="applicationMessage">
      <div class="applicationMessage_closer"><font-awesome-icon :icon="['fas', 'x']" /></div>
      <p class="applicationMessage_title">Vielen Dank für deine Bewerbung bei ONM! :)</p>
      <p>Wir werden deine Unterlagen durchgehen, und uns in kürze bei dir melden.</p>
    </div>
  </div>
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
    //show message to user after they applied 
    if (typeof show_application_message !== 'undefined' && show_application_message == true) {
      show_application_message = false
      var message_modal = document.getElementById('applicationMessage_modal_container')
      console.log(message_modal)
      message_modal.classList.add('display_modal')
      message_modal.onclick = function () {
        message_modal.classList.remove('display_modal')
      }
    }
    //get page id from name for pretty url
    axios.get(this.pageSrcURL, {
      headers: {
        'Authorization': 'bearer ' + import.meta.env.VITE_STRAPI_ACCESS_TOKEN
      }
    }).then((response) => {

      response.data.data.forEach((el) => {
        // fix reloading pages with URLSlugs
        if (el.attributes.PageName == this.$route.params.pageName || el.attributes.URLSlug == this.$route.params.pageName) {
          this.pageContentID = el.id;
        }
      })
    }
    )
    //404 Page
    if (this.$route.params.pageName != 'NotFoundError' && !this.map.get(this.$route.params.pageName)) {
      // window.location = `/404`

    }
  },
  created() {

  }
}
</script>
<style>

</style>
