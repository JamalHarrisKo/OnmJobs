<template>
  <header>
    <!-- <img alt="Vue logo" class="logo" src="./assets/logo.svg" width="125" height="125" /> -->
    <!-- Add Navigation via router Links -->
    <nav>

      <span v-for="navbarItem in newNavbarItems">
          <!-- <RouterLink :to="{ path: '/' + navbarItem.id }">{{ navbarItem.attributes.PageName }}</RouterLink> -->
          <RouterLink :to="{ path: '/' + navbarItem.attributes.PageName }" v-if=" navbarItem.attributes.URLSlug == null">{{ navbarItem.attributes.PageName }}</RouterLink>
          <RouterLink :to="{ path: '/' + navbarItem.attributes.URLSlug }" v-else>{{ navbarItem.attributes.PageName }}</RouterLink>

      
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
  <!-- <div class="content-container"> -->
    <!-- dynamic Routing sucess:) 
This is because Vue Router does not notice any change if the same component is being addressed. With the key, any change to the path will trigger a reload of the component with the new data. -->
    <RouterView :key="$route.fullPath" v-if="this.map" :map="this.map" :pageName="$route.params.pageName"/>
  


  <!-- </div> -->
  <footer>
    <div class="footer">
    <div class="page-content">
    <div class="footer_nav">
      <span class="Footer_Navitem" v-for="navbarItem in FooterNavItems">
          <!-- <RouterLink :to="{ path: '/' + navbarItem.id }">{{ navbarItem.attributes.PageName }}</RouterLink> -->
          <RouterLink :to="{ path: '/' + navbarItem.attributes.PageName }" v-if=" navbarItem.attributes.URLSlug == null">{{ navbarItem.attributes.PageName }}</RouterLink>
          <RouterLink :to="{ path: '/' + navbarItem.attributes.URLSlug }" v-else>{{ navbarItem.attributes.PageName }}</RouterLink>
      </span>
    </div>
    </div>
  </div>
  </footer>
</template>
<style>
.footer{
  background-color: gray;
 
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2rem;
}
.footer_nav{
  width: 100%;
  display: flex;
}
.Footer_Navitem a{
  padding: 1rem;
  text-decoration: none;
  color: white;
  display: block;
  width: fit-content;
}
.formkit-actions {
  display: none;
}

body {
  margin: 0 !important;
  padding: 0 !important;
  font-family: Arial, Helvetica, sans-serif;
}

.content-container {
  max-width: 80%;
  width: 100%;
  margin: 0 auto;
  /* background-color: #FAF9F6; */
  padding: 0 2rem;
}

nav {
  background-color: gray;
  padding: 1rem 0;
  display: flex;
  justify-content: center;
  /* position: fixed; */
  top: 0;
  left: 0;
  width: 100%;
  z-index: 110; 
  /* wtf */
}

nav a {
  text-decoration: none;
  color: white;
  font-weight: bold;
  margin: 0 1rem;

}
</style>
<script>
import axios from 'axios'

export default {
  name: 'App',
  data() {
    return {

      dataSrcURL: 'http://localhost:1337/api/pages/',
      //?populate=deep
      pageOptionsURL : 'http://localhost:1337/api/options-page?populate=*',
      navbarItems: [],
      newNavbarItems: [],
      FooterNavItems: [],
      map: new Map()
    }

  },

  mounted() {
    axios.get(this.pageOptionsURL).then((response) => {
      // console.log(response.data.data)
      this.newNavbarItems = response.data.data.attributes.MainNav.data
      this.FooterNavItems = response.data.data.attributes.FooterNav.data
    }
    ),

    axios.get(this.dataSrcURL).then((response) => {
      this.navbarItems = response.data.data
      // var map = new Map();
      this.navbarItems.forEach((el)=>{
        // this.pages[el.id] = el.attributes.PageName
        if(el.attributes.URLSlug != null && el.attributes.URLSlug != "Default"){
          this.map.set(el.attributes.URLSlug, el.id); 
        }else{ 
          this.map.set(el.attributes.PageName, el.id); 
        }
      })

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