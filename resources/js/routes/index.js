// resources/js/router/index.js
import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../components/ExampleComponent.vue'

const routes = [
  {
    path: '/home',
    name: 'home',
    component: HomeView
  },
  // Agrega aquí más rutas según sea necesario
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
