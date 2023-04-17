<script setup>
// import { classBody } from '@babel/types';
import PageContent from '../components/PageContent.vue'
</script>
<template>
  <main>
    <PageContent :pageName="$route.params.pageName" v-if="this.pageContentID" :pageContentID="this.pageContentID"
      :key="$route.params.pageName"></PageContent>
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
    if (typeof show_application_message !== 'undefined' && show_application_message == true){
      show_application_message = false
      var message_modal = document.getElementById('applicationMessage_modal_container')
      console.log(message_modal)
      message_modal.classList.add('display_modal')
      message_modal.onclick=function(){
        message_modal.classList.remove('display_modal')
      }

    }
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
      // window.location = `/404`
      console.log(this.map)
    }
  },
  created() {

  }
}
</script>
<style>
#applicationMessage_modal_container{
  display: none;
}
#applicationMessage_modal_container.display_modal{
display: block;
}
.applicationMessage_closer{
  position: absolute;
  top:10px;
  right: 10px;
}
.applicationMessage_closer svg:hover{
  transform: scale(1.3);
  cursor: pointer;
}
#applicationMessage_modal_container{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 110;
  background-color: rgba(0,0,0,0.7);
}

.applicationMessage_title {
  font-weight: bold;
}

.applicationMessage {
  width: 400px;
  max-height: 90%;
  height: 300px;
  max-height: 90%;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #ff8c00;
  color: white;
  display: flex;
  justify-content: center;
  text-align: center;
  padding: 2rem;
  flex-direction: column;

  z-index: 1;
}
</style>
