import { createRouter, createWebHistory } from 'vue-router'
const routes = [
  {
    path: '/',
    redirect : { name:'login'}
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/LoginView.vue')
  },
  {
    path: '/main',
    name: 'main',
    component: () => import('../views/MainView.vue')
  },
  {
    path: '/board',
    name : 'board',
    component: () => import('../views/BoardView.vue')
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
