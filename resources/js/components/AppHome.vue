<template>
<v-app>
<navbar></navbar>

  <v-container>
      <v-layout row >
          <v-flex xs12>
             
             <router-view></router-view>

          </v-flex>
      </v-layout>
  </v-container>

    <app-footer></app-footer>

</v-app>

 
 
 

    
</template>

<script>
import Navbar from './Navbar';
import AppFooter from './AppFooter';
export default {
   components: {Navbar, AppFooter}
}
</script>

<style>

</style>
