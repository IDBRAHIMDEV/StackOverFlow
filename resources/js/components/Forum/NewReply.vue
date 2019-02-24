<template>
    
    <div>
          <v-textarea class="mt-2"
            v-model="reply.body"
            label="Reply"
            required
            ></v-textarea>

            <v-btn @click="newReply">
                <v-icon color="red">add</v-icon> Reply
            </v-btn>
    </div>
  

</template>

<script>
export default {
    props: ['question'],
   data() {
       return {
           reply: {
                body: '',
                user_id: User.id()
           }
          
       }
   },
   methods: {
       newReply: function() {
           console.log(this.question);
           axios.post(`http://localhost:8000/api/question/${this.question.slug}/reply`, this.reply)
                .then(res => console.log(res))
                .catch(err => console.error(err))
       }
   }
}
</script>

<style>

</style>
