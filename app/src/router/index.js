import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

import CategEstabelecimentoView from '../views/CategEstabelecimentos/View.vue'
import CategEstabelecimentoCreate from '../views/CategEstabelecimentos/Create.vue'
import CategEstabelecimentoEdit from '../views/CategEstabelecimentos/Edit.vue'

import CategProdutoView from '../views/CategProdutos/View.vue'
import CategProdutoCreate from '../views/CategProdutos/Create.vue'
import CategProdutoEdit from '../views/CategProdutos/Edit.vue'

import ClienteView from '../views/Clientes/View.vue'
import ClienteCreate from '../views/Clientes/Create.vue'
import ClienteEdit from '../views/Clientes/Edit.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },

    {
      path: '/categ-estabelecimentos',
      name: 'categEstabelecimentos',
      component: CategEstabelecimentoView
    },
    {
      path: '/categ-estabelecimentos/create',
      name: 'categEstabelecimentosCreate',
      component: CategEstabelecimentoCreate
    },
    {
      path: '/categ-estabelecimentos/:id/edit',
      name: 'categEstabelecimentosEdit',
      component: CategEstabelecimentoEdit
    },  
    
    {
      path: '/categ-produtos',
      name: 'categProdutos',
      component: CategProdutoView
    },
    {
      path: '/categ-produtos/create',
      name: 'categProdutosCreate',
      component: CategProdutoCreate
    },
    {
      path: '/categ-produtos/:id/edit',
      name: 'categProdutosEdit',
      component: CategProdutoEdit
    },

    {
      path: '/cliente',
      name: 'cliente',
      component: ClienteView
    },
    {
      path: '/cliente/create',
      name: 'clienteCreate',
      component: ClienteCreate
    },
    {
      path: '/cliente/:id/edit',
      name: 'clienteEdit',
      component: ClienteEdit
    },
  ]
})

export default router
