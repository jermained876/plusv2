import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from "../components/HomePage/home.vue"
import product from "../components/Product/productcontainer.vue"

const routes = [
    { path: '/home', component: Home, name:'home' },
    { path: '/product', component: product, name:'product' },

  ]

  // 3. Create the router instance and pass the `routes` option
  // You can pass in additional options here, but let's
  // keep it simple for now.
  const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode:'history'

  })

  export default router
