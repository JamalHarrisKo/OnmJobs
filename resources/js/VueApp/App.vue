
<template>
  <header>
    <nav class="mainNavigation">
      <div class="navigation_logo">
        <a href="/"><img class="navlogo--full navlogo--full--active" :src="'http://localhost:1337' + pageLogoURL"><img  class="navlogo--scrolled" :src="'http://localhost:1337' + scrolledPageLogoURL"></a>
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
      scrolledPageLogoURL:'',
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
      this.scrolledPageLogoURL = response.data.data.attributes.PageLogoScrolled.data.attributes.url

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
        document.querySelector('.navlogo--scrolled').classList.remove('navlogo--scrolled--active')
        document.querySelector('.navlogo--full').classList.add('navlogo--full--active')
      } else {
        document.querySelector('.navigation_logo').classList.add('navigation_logo--scrolled')
        document.querySelector('.mainNavigation').classList.add('mainNavigation--scrolled')
        document.querySelector('.navlogo--scrolled').classList.add('navlogo--scrolled--active')
        document.querySelector('.navlogo--full').classList.remove('navlogo--full--active')

      }
    }
    // document.querySelector('.navigation_logo')
  },
}


</script>