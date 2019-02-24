<template>
 <v-layout>
    <v-flex xs12 >
        
      <v-card>
      
        <v-card-title primary-title>
          <div>
            <h3 class="headline mb-0">{{ data.title }}</h3>
            <div> {{ data.content }} </div>
          </div>
        </v-card-title>

        <v-card-actions>
          <v-btn flat color="orange">Share</v-btn>
          <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
      </v-card>

      <v-divider></v-divider>

      <h2 class="my-5">Replies</h2>
      
       <v-card class="mt-3" v-for="reply in replies" :key="reply.id">
      
        <v-card-title primary-title>
          <div>
           
            <div class="mb-3"> {{ reply.body }} </div>
            <span ><strong>By: {{ reply.user.name }}</strong> </span>
          </div>
        </v-card-title>

        <v-card-actions>
          <v-btn flat color="orange">Share</v-btn>
          <v-btn flat color="orange">Explore</v-btn>
        </v-card-actions>
      </v-card>

       <new-reply :question="data"></new-reply>
       
    </v-flex>
  </v-layout>
 
</template>

<script>
import NewReply from './NewReply';
export default {
    components: {NewReply},
   data() {
       return {
           data: null,
           replies: []
       }
   },
   methods: {
       getOneQuestion() {
         const slug = this.$route.params.slug;
         
        axios.get(`http://localhost:8000/api/question/${slug}`)
             .then(res => {
                 this.data = res.data.data;
                 this.replies = this.data.replies;
              })  
             .catch(err => console.error(err))
       }
   },
   created() {
       this.getOneQuestion();
   }
}
</script>

<style>

</style>
