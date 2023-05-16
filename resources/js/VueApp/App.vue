
<template>
  <header>
    <nav class="mainNavigation">
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
      <div class="mobile_nav">
        <div class="mobile_nav_dropdown">
          <font-awesome-icon :icon="['fas', 'bars']" />
        </div>
        <div class="mobile_nav_closer">
          <font-awesome-icon :icon="['fas', 'xmark']" />
        </div>

        <div class="mobile_nav_items">

          <span class='mobile_nav_items__single' v-for="navbarItem in newNavbarItems">
            <RouterLink :to="{ path: '/' + navbarItem.attributes.PageName }" v-if="navbarItem.attributes.URLSlug == null">
              {{
                navbarItem.attributes.PageName }}</RouterLink>
            <RouterLink :to="{ path: '/' + navbarItem.attributes.URLSlug }" v-else>{{ navbarItem.attributes.PageName }}
            </RouterLink>
          </span>
        </div>

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
body {
  color: #2a2c2c;
  background-color: #FFFFFF;
}

main{
  min-height: calc(100vh - 224px - 5rem);
}

.nav_items {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: fit-content;
  display: flex;
}
.nav_items a{
  transition: ease 0.2s;
  color: #2a2c2c;
}
.nav_items a:hover{
  color: #ff8c00;
  transform: scale(1.03);
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
  height: 50px;
  width: auto;
  transition: ease 0.2s;
}

.navigation_logo.navigation_logo--scrolled img {
  height: 30px;
  transition: ease 0.2s;
}

header {
  margin-top: 84px;
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
  color: #FAF9F6;
  font-size: 2rem;
  margin: 1.5rem;
}

.footer_social__single :hover {
  transition: ease 0.2s;
}

.footer_social__single :hover {
  color: #ff8c00;

}


.footer_social__header {
  text-align: center;
  color: #FAF9F6;
  font-size: 1.3rem;
}

.footer {
  background-color: #2a2c2c;
  height: 224px;
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
  color: #FAF9F6;
  display: block;
  width: fit-content;
  transition: ease 0.2s;
}

.Footer_Navitem a:hover {
  color: #ff8c00;
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
  /* max-width: 80%; */
  max-width: 1500px;
  width: 100%;
  margin: 0 auto;
  /* background-color: #FAF9F6; */
  padding: 0 2rem;
}

@media(max-width:576px) {
  .content-container {
    padding: 0 1rem;
  }
}

.mobile_nav {
  display: none;
}

.mobile_nav_dropdown {
  margin-left: auto;
  width: fit-content;
  margin-right: 1rem;
  position: relative;
  font-size: 2rem;
  display: none;
  cursor: pointer;
  transition: ease 0.2s;
}

.mobile_nav_dropdown:hover {
  color: #ff8c00;
}

.mobile_nav_dropdown--hidden {
  display: none !important;
}

.mobile_nav_items {
  display: flex;
  flex-direction: column;
  position: absolute;
  top: 3rem;
  right: 0;
  background-color: #FAF9F6;
  padding: 2rem;

  width: 100%;
  justify-content: center;
  align-items: center;
  border-bottom: 4px solid #ff8c00;
  display: none;
}

.mobile_nav_items.mobile_nav_items--visible {
  display: flex;
}

.mainNavigation {
  background-color: #FAF9F6;
  position: fixed;
  border-bottom: 2px solid #ff8c00;
  padding: 1rem 0;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 110;
}
.mainNavigation.mainNavigation--scrolled{
  padding: 0.6rem 0;
}

.mainNavigation a {
  text-decoration: none;
  color: #2a2c2c;
  font-weight: bold;
  margin: 0 1rem;
  display: flex;
  justify-content: center;
}

.mobile_nav_items__single {
  border-top: 1px solid #2a2c2c;
  border-bottom: 1px solid #2a2c2c;
  width: 100%;
  display: flex;
}

.mobile_nav_items__single:first-child {
  border-top: none;
}

/* .mobile_nav_items__single:nth-child(2) {
  border-top: none;
} */
.mobile_nav_items__single:last-child {
  border-bottom: none;
}

.mobile_nav_items__single a {
  padding: 2rem 0;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: ease 0.2s;
}

.mobile_nav_items__single a:hover {
  color: #ff8c00;
  transform: scale(1.05);
}

.mobile_nav_closer {
  position: absolute;
  right: 1rem;
  top: 1rem;
  font-size: 2rem;
  display: none;
  cursor: pointer;
  transition: ease 0.2s;
}

.mobile_nav_closer:hover {
  color: #ff8c00;
}

.mobile_nav_closer--visible {
  display: block;
}

@media(max-width:768px) {
  .nav_items {
    display: none;
  }

  .mobile_nav_dropdown {
    display: block;
  }

  .mobile_nav_items {
    display: none;
  }

  .mobile_nav {
    display: block;
  }


}

/* move this to a different file */
.errorModal {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 200;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex !important;
  justify-content: center;
  align-items: center;
}

.errorModal.errorModal__closed {
  display: none !important;
}

.errorModal__window {
  min-width: 300px;
  min-height: 100px;
  max-width: 100%;
  max-height: 100%;
  overflow-y: scroll;
  background-color: white;
  position: relative;
  padding: 2rem;
}

.errorModal__window::-webkit-scrollbar {
  width: 7px;
  background-color: #f6f6f6;
}

.errorModal__window::-webkit-scrollbar-thumb {
  background: #ff8c00;
  border-radius: 5px;
}

.errorModal__window ul {
  padding-left: 0;
  list-style: none;
}

.errorModal__window ul li {
  margin-bottom: 1rem;
  display: flex;
  line-height: 1.5;

}

.errorModal__window ul li::before {
  content: '\25CF';
  color: #ff8c00;
  display: block;
  padding-right: 0.5rem;
}

.errorModal__window__closer {
  position: absolute;
  top: 10px;
  right: 10px;
}

.errorModal__window__closer:hover {
  color: #ff8c00;
  cursor: pointer;
}

.errorMoal__window__header {
  font-weight: bold;
  font-size: 1.2rem;
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
    axios.get(this.pageOptionsURL, {
      headers: {
        'Authorization': 'bearer ' + import.meta.env.VITE_STRAPI_ACCESS_TOKEN
      }
    }).then((response) => {
      this.newNavbarItems = response.data.data.attributes.MainNav.data
      this.FooterNavItems = response.data.data.attributes.FooterNav.data
      this.pageLogoURL = response.data.data.attributes.PageLogo.data.attributes.url

    }
    ),
      axios.get(this.socialFooterURL, {
        headers: {
          'Authorization': 'bearer ' + import.meta.env.VITE_STRAPI_ACCESS_TOKEN
        }
      }).then((response) => {
        this.SocialItems = response.data.data.attributes.SocialMedia.FooterSocialLinks;

        this.SocialItemsHeader = response.data.data.attributes.SocialMedia.Header;
      }
      ),
      axios.get(this.dataSrcURL, {
        headers: {
          'Authorization': 'bearer ' + import.meta.env.VITE_STRAPI_ACCESS_TOKEN
        }
      }).then((response) => {
        this.navbarItems = response.data.data
        // var map = new Map() in data return object
        this.navbarItems.forEach((el) => {
          // this.pages[el.id] = el.attributes.PageName or URL slug if it is set
          if (el.attributes.URLSlug != null && el.attributes.URLSlug != "Default") {
            this.map.set(el.attributes.URLSlug, el.id);
          } else {
            this.map.set(el.attributes.PageName, el.id);
          }
        })
      })
    console.log(document.querySelector('.mobile_nav_dropdown'))

    // openMobileNav = document.querySelector('.mobile_nav_dropdown');
    // mobileNav = document.querySelector('.mobile_nav_items');
    // closeMobileNav = document.querySelector('.mobile_nav_closer');

    document.querySelector('.mobile_nav_dropdown').onclick = function () {
      document.querySelector('.mobile_nav_items').classList.add('mobile_nav_items--visible')
      document.querySelector('.mobile_nav_dropdown').classList.add('mobile_nav_dropdown--hidden')
      document.querySelector('.mobile_nav_closer').classList.add('mobile_nav_closer--visible')

    }
    document.querySelector('.mobile_nav_closer').onclick = function () {
      document.querySelector('.mobile_nav_items').classList.remove('mobile_nav_items--visible')
      document.querySelector('.mobile_nav_dropdown').classList.remove('mobile_nav_dropdown--hidden')
      document.querySelector('.mobile_nav_closer').classList.remove('mobile_nav_closer--visible')
    }
    document.querySelector('.mobile_nav_items').onclick = function () {
      document.querySelector('.mobile_nav_items').classList.remove('mobile_nav_items--visible')
      document.querySelector('.mobile_nav_dropdown').classList.remove('mobile_nav_dropdown--hidden')
      document.querySelector('.mobile_nav_closer').classList.remove('mobile_nav_closer--visible')
    }

    //navigation onscroll
    window.onscroll = function () {

      if (window.scrollY == 0) {
        document.querySelector('.navigation_logo').classList.remove('navigation_logo--scrolled')
        document.querySelector('.mainNavigation').classList.remove('mainNavigation--scrolled')
      } else {
        document.querySelector('.navigation_logo').classList.add('navigation_logo--scrolled')
        document.querySelector('.mainNavigation').classList.add('mainNavigation--scrolled')

      }
    }
    // document.querySelector('.navigation_logo')
  },
}


</script>