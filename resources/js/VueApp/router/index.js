import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import PageNotFound from '../views/PageNotFound.vue'


//Dynamic routing: make HomeConst to pass to vue router with dymaic information
// const Home = {
//   template: HomeView,
// uset template instead
// }
// these are passed to `createRouter`
const routes = [
  // dynamic segments start with a colon
  { path: '/:pageName', component: HomeView },
  { path: '/', component: HomeView, props: { HomePage: 1 } },                         //TODO find better solution for homeroute
  {
    path: '/404', component: PageNotFound
  },
  {
    path: '/:pathMatch(.*)*', component: PageNotFound
  }
]
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: routes
})

export default router
