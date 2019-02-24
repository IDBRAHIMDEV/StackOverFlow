<template>
    
  <v-toolbar>
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>StackOverFlow</v-toolbar-title>
    <v-spacer></v-spacer>
   
      <router-link to="/">
        <v-btn flat>Forum</v-btn>
      </router-link>
      <router-link to="/question/add">
         <v-btn flat>Ask Question</v-btn>
      </router-link>
      
      <v-btn flat>Category</v-btn>
      <router-link to="/login" v-if="!logged">
        <v-btn flat>Login</v-btn>
      </router-link>
       
        <v-btn flat v-else @click="signOut()">Logout</v-btn>
    
   
  </v-toolbar>

</template>

<script>
export default {
   data() {
     return {
       logged: User.loggedIn(),
       myUrl: "http://localhost:8000/api/auth/logout"
     }
   },
   methods: {
     signOut() {
       User.logout(this.myUrl)
     }
   }
}
</script>

<style>

</style>
