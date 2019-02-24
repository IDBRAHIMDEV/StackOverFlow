<template>
  <v-form
    ref="form"
    v-model="valid"
    lazy-validation
  >

     <v-text-field
      v-model="user.name"
      label="Name"
      required
    ></v-text-field>

    <v-text-field
      v-model="user.email"
      :rules="emailRules"
      label="E-mail"
      required
    ></v-text-field>

    <v-text-field
      v-model="user.password"
      :rules="passwordRules"
      label="Password"
      required
    ></v-text-field>

      <v-btn color="info" :disabled="!valid"  @click="validate">SignUp</v-btn>
      
      <router-link to="/login">
            <v-btn color="success">
               Login
            </v-btn>
      </router-link>
        
  </v-form>
</template>

<script>
 export default {
    data: () => ({
      valid: true,
      myUrl: "http://localhost:8000/api/auth",
      user: {
           name: '',
           email: '',
           password: '',
      },
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid'
      ],
      passwordRules: [
          v => !!v || 'Passowrd is required',
      ]
    }),

    methods: {
      validate () {
        if (this.$refs.form.validate()) {
           User.signUp(this.myUrl, this.user);
        }
      }
    }
  }
</script>

<style>
    
</style>