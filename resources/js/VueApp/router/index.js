import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import JobsView from '../views/JobsView.vue'
import AusbildungView from '../views/AusbildungView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      props:{pageContentID:1}
    },
    {
      path: '/jobs',
      name: 'jobs',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      // component: () => import('../views/JobsView.vue')
      component: JobsView,
      props:{pageContentID:3}
    },
    {
      path: '/Ausbildung',
      name: 'ausbildung',
      component: AusbildungView,
      props:{pageContentID:2}
    }
  ]
})

export default router
