<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <header>

    <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">          
          <RouterLink class="navbar-brand" to="/">MarketHub</RouterLink>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">              
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/categ-estabelecimentos">Categorias de Estabelecimentos</RouterLink>
              </li>  
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/">Estabelecimentos</RouterLink>
              </li> 
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/categ-produtos">Categorias de Produtos</RouterLink>
              </li> 
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/">Produtos</RouterLink>
              </li> 
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/cliente">Clientes</RouterLink>
              </li>     
              <li class="nav-item">
                <RouterLink class="nav-link active" to="/">Pedidos</RouterLink>
              </li>                     
            </ul>            
          </div>
        </div>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style scoped></style>
