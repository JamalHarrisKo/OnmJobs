
<template>
  <header>
    <nav>
      <div class="navigation_logo">
        <a href="/"><img :src="'http://localhost:1337' + pageLogoURL"><img></a>
      </div>
      <div class="nav_items">
        <span v-for="navbarItem in newNavbarItems">
          <RouterLink :to="{ path: '/' + navbarItem.attributes.PageName }" v-if="navbarItem.attributes.URLSlug == null">{{
            navbarItem.attributes.PageName }}</RouterLink>
          <RouterLink :to="{ path: '/' + navbarItem.attributes.URLSlug }" v-else>{{ navbarItem.attributes.PageName }}
          </RouterLink>
        </span>
      </div>
    </nav>
  </header>
  <RouterView :key="$route.fullPath" v-if="this.map" :map="this.map" :pageName="$route.params.pageName" />

  <footer>
    <div class="footer">
      <div class="page-content">
        <div class="footer_nav">
          <span class="Footer_Navitem" v-for="navbarItem in FooterNavItems">
            <!-- <RouterLink :to="{ path: '/' + navbarItem.id }">{{ navbarItem.attributes.PageName }}</RouterLink> -->
            <RouterLink :to="{ path: '/' + navbarItem.attributes.PageName }" v-if="navbarItem.attributes.URLSlug == null">
              {{ navbarItem.attributes.PageName }}</RouterLink>
            <RouterLink :to="{ path: '/' + navbarItem.attributes.URLSlug }" v-else>{{ navbarItem.attributes.PageName }}
            </RouterLink>
          </span>
        </div>
        <div class="footer_social">
          <p class="footer_social__header">{{ SocialItemsHeader }}</p>
          <div class="footer_social__singles">
            <div class="footer_social__single" v-for="item in SocialItems">
              <a :href="item.URL" target="_blank">
                <span v-if="item.SocialMedia == 'Twitter'">
                  <font-awesome-icon :icon="['fab', 'twitter']" />
                </span>
                <span v-if="item.SocialMedia == 'Facebook'">
                  <font-awesome-icon :icon="['fab', 'facebook']" />
                </span>
                <span v-if="item.SocialMedia == 'LinkedIn'">
                  <font-awesome-icon :icon="['fab', 'linkedin']" />
                </span>
                <span v-if="item.SocialMedia == 'Xing'">
                  <font-awesome-icon :icon="['fab', 'xing']" />
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>
<style>

body{
  color: #2a2c2c;
}
.nav_items {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: fit-content;
  display: flex;
}

.navigation_logo {
  padding: 0 1rem;
  display: block;
  float: left;
  left: 0;
  top: 0;

  /* left: 0;
  margin-right: auto; */
}

.navigation_logo img {
  height: 30px;
  width: auto;
}

header {
  margin-top: 68px;
}

p {
  line-height: 1.5;
}

div {
  box-sizing: border-box;
}

.footer_social__singles {
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer_social__single a {
  color: white;
  font-size: 2rem;
  margin: 1.5rem;
  transition: ease 0.2s;
}

.footer_social__single a :hover {
  color: #ff8c00;
  transition: ease 0.2s;

}

.footer_social__header {
  text-align: center;
  color: white;
  font-size: 1.3rem;
}

.footer {
  background-color: gray;

  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2rem;
}

.footer_nav {
  width: 100%;
  display: flex;
  justify-content: center;
}

.Footer_Navitem a {
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
  background-color: white;
  position: fixed;
  border-bottom: 2px solid gray;
  padding: 1rem 0;
  /* display: flex; */
  /* justify-content: center; */
  /* position: fixed; */
  top: 0;
  left: 0;
  width: 100%;
  z-index: 110;
  /* wtf */
}

nav a {
  text-decoration: none;
  color: black;
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
      pageOptionsURL: 'http://localhost:1337/api/options-page?populate=*',
      socialFooterURL: 'http://localhost:1337/api/options-page?&populate[SocialMedia][populate][1]=FooterSocialLinks',
      navbarItems: [],
      newNavbarItems: [],
      FooterNavItems: [],
      SocialItems: [],
      SocialItemsHeader: '',
      pageLogoURL: '',
      map: new Map()
    }
  },

  mounted() {
    axios.get(this.pageOptionsURL).then((response) => {
      this.newNavbarItems = response.data.data.attributes.MainNav.data
      this.FooterNavItems = response.data.data.attributes.FooterNav.data
      this.pageLogoURL = response.data.data.attributes.PageLogo.data.attributes.url
      console.log(this.pageLogoURL)
    }
    ),
      axios.get(this.socialFooterURL).then((response) => {
        this.SocialItems = response.data.data.attributes.SocialMedia.FooterSocialLinks;
        console.log(this.SocialItems)
        this.SocialItemsHeader = response.data.data.attributes.SocialMedia.Header;
        // console.log(response.data.data.attributes.SocialMedia)
      }
      ),
      axios.get(this.dataSrcURL).then((response) => {
        this.navbarItems = response.data.data
        // var map = new Map();
        this.navbarItems.forEach((el) => {
          // this.pages[el.id] = el.attributes.PageName
          if (el.attributes.URLSlug != null && el.attributes.URLSlug != "Default") {
            this.map.set(el.attributes.URLSlug, el.id);
          } else {
            this.map.set(el.attributes.PageName, el.id);
          }
        })
      }
      )
  },
}
</script>