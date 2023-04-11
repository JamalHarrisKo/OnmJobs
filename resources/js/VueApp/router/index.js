import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import JobsView from '../views/JobsView.vue'
import AusbildungView from '../views/AusbildungView.vue'

//Dynamic routing: make HomeConst to pass to vue router with dymaic information
// const Home = {
//   template: HomeView,
// uset template instead
// }
// these are passed to `createRouter`
const routes = [
  // dynamic segments start with a colon
  // { path: '/:id', component: HomeView },
  { path: '/:pageName', component: HomeView },
  { path: '/', component: HomeView, props:{HomePage:1}} //TODO find better solution for homeroute
]
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  // routes: [
  //   {
  //     path: '/',
  //     name: 'home',
  //     component: HomeView,
  //     props:{pageContentID:1}
  //   },
  //   {
  //     path: '/jobs',
  //     name: 'jobs',
  //     // route level code-splitting
  //     // this generates a separate chunk (About.[hash].js) for this route
  //     // which is lazy-loaded when the route is visited.
  //     // component: () => import('../views/JobsView.vue')
  //     component: JobsView,
  //     props:{pageContentID:2}
  //   },
  //   {
  //     path: '/Ausbildung',
  //     name: 'ausbildung',
  //     component: HomeView,
  //     props:{pageContentID:3}
  //   }
  // ]
  routes: routes
})

export default router
