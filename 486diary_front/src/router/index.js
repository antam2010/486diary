import { createRouter, createWebHistory } from 'vue-router'
const routes = [
  {
    path: '/',
    alias : '/login',
    name: 'login',
    component: () => import('../views/LoginView.vue')
  },
  {
    path: '/main',
    name: 'main',
    component: () => import('../views/MainView.vue')
  },
  {
    path: '/board/list',
    alias : '/board',
    name : 'board',
    component: () => import('../views/board/list.vue')
  },
  {
    path: '/board/view',
    name : 'boardView',
    component: () => import('../views/board/view.vue')
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
