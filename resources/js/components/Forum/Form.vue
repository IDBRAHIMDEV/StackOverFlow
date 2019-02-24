<template>
  <div>
       <h1>List questions</h1>

       <v-layout row>
          <v-flex xs8>
              <v-card class="mt-2" v-for="(question, index) in questions" :key="index">
                    <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">
                          <router-link :to="'/question/'+question.path">
                            {{ question.title }}
                          </router-link>
                        </h3>
                        <div> {{ question.content }} </div>
                    </div>
                    </v-card-title>

                    <v-card-actions>
                    <v-btn flat color="orange">Share</v-btn>
                    <v-btn flat color="orange">Explore</v-btn>
                    </v-card-actions>
                </v-card>
          </v-flex>

          <v-flex xs4>
              <h3>Categories</h3>
          </v-flex>
        </v-layout>  
       
  </div>
   
</template>

<script>
export default {
   data: function() {
       return {
           questions: [],
           myUrl: 'http://localhost:8000/api/question'
       }
   },
   methods: {
       getQuestions() {
           
           axios.get(this.myUrl)
                .then(res => {
                    this.questions = res.data.data
                })
                .catch(err => console.log(err))
       },
       isLogged() {
           if(!User.loggedIn()) {
               window.location = "/login";
           }
       }
   },
   created() {
        this.isLogged(); 
       this.getQuestions();
   }
}
</script>

<style>

</style>
