<template>
      <v-form>

    <v-text-field
      v-model="question.title"
      label="Title"
      required
    ></v-text-field>

     <v-select
          :items="categories"
          v-model="question.category_id"
          item-value="id"
          item-text="name"
          label="category"
        ></v-select>

    <v-textarea
      v-model="question.body"
      label="Body"
      required
    ></v-textarea>

    <v-btn
      color="red"
      dark
      @click="addQuestion"
    >
      <v-icon>add</v-icon>
    </v-btn>
      
  </v-form>
</template>

<script>
export default {
   data() {
       return {
           categories: [],
           question: {
               title: '',
               body: '',
               category_id: '',
               user_id: User.id()
           }
       }
   },
   methods: {
       getCategories() {
           axios.get('http://localhost:8000/api/category')
                .then(res => this.categories = res.data)
                .catch(err => console.error(err))
       },
       addQuestion: function() {
           axios.post('http://localhost:8000/api/question', this.question)
                .then(res => this.$router.push('/'))
                .catch(err => console.error(err))
       }
   },
   created() {
       this.getCategories()
   }
}
</script>

<style>

</style>
