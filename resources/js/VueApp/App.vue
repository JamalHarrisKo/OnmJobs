<template>
  <header>
    <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" />
    <!-- Add Navigation via router Links -->
    <nav>

      <span v-for="navbarItem in navbarItems">
        <RouterLink :to="{path: '/' + navbarItem.id}">{{ navbarItem.attributes.PageName }}</RouterLink>
      </span>


      
      <!-- <RouterLink to="/1">Home</RouterLink>

      <RouterLink to="/2">Jobs</RouterLink>

      <RouterLink to="/3">Ausbildung</RouterLink> -->

      <!-- 04.04 make router dynamic
      foreach {{ pages }}
      <RouterLink to="/{{ page.slug }}">{{page.title}}</RouterLink> -->

    </nav>

  </header>
  <!-- Render content with router -->
  <div class="content-container">
    <!-- dynamic Routing sucess:) 
This is because Vue Router does not notice any change if the same component is being addressed. With the key, any change to the path will trigger a reload of the component with the new data. -->

    <RouterView :key="$route.params.id" />


  </div>
</template>
<style>
.formkit-actions {
  display: none;
}

body {
  margin: 0 !important;
  padding: 0 !important;
  font-family: Arial, Helvetica, sans-serif;
}

.content-container {
  max-width: 1500px;
  margin: 0 auto;
  background-color: #FAF9F6;
  padding: 2rem;
}

nav {
  background-color: gray;
  padding: 1rem;
  display: flex;
  justify-content: center;
}

nav a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  margin: 0 1rem;

}
</style>
<script>

// document.addEventListener("DOMContentLoaded", function () {
//   // Your code goes here
//   setTimeout(function(){
//     appContainer = document.querySelector("#appErrorDiv");
//   errors = appContainer.dataset.error
//   console.log(errors)
//   }, 5000)

// });

//04.04. make axios call t0 /api/pages

// import { onMounted } from 'vue';    seeContent()
import axios from 'axios'

export default {
  name: 'App',
  // props: ['navbarItems'],
  //container for navbar itmes
  // navbarItems: [],
  // setup(){
  //   navbarItems = []
  // },
  data() {
    return {

      dataSrcURL: 'http://localhost:1337/api/pages/',
      //?populate=deep
      navbarItems:[]


    }

  },

  mounted() {

    axios.get(this.dataSrcURL).then((response) => {
      // console.log(response.data.data)
      // response.data.data.forEach(element => {
      //   console.log(element.id)
      //   this.navbarItems.push(element)
      // });
      this.navbarItems= response.data.data
      // console.log(this.navbarItems)
      // this.pageObject = response.data.data.attributes.PageContent
      // this.pageObject.forEach(el =>
      //   this.loadContent(el)
      // )
      // this.logContent(this.ContentArray)
    }
    )
  },
  methods: {
    //get all contents from page object
    // loadContent(el) {
    //   this.ContentArray.push(el)
    // },
    // logContent(array) {
    //   array.forEach(ele => console.log(ele))
    // },


  },
}
</script>