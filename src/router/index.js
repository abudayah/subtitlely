import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Browse from '@/components/Browse'
import View from '@/components/subtitle/View'

// register globally used common components
import AppHeader from '@/components/common/AppHeader'

Vue.component('app-header', AppHeader)

Vue.use(Router)

export default new Router({
  mode: 'history',
  // linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/browse',
      name: 'Browse',
      component: Browse
    },
    {
      path: '/subtitle/:id',
      name: 'view',
      props: true,
      component: View
    }
  ]
})
