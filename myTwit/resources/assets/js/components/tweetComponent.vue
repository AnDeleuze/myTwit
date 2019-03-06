<template>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Tweet</div>

        <div class="card-body">
          <form @submit.prevent="addTweet" class="inputBox">
            <textarea name="tweet" v-model="newTweet" class=".textbox form-control"></textarea>
            <input type="submit" value="tweet" class="btn btn-primary submit">
          </form>
          <ul>
            <li v-for="todo in todos">{{ todo }}</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data: function() {
    return {
      newTweet: '',
      todos: [
        'task1',
        'task2',
        'task3'
      ]
    }
  },
  methods: {
    addTweet: function() {
      if (this.newTweet === '') {
        return false
      }
      let now = new Date()
      let year = now.getFullYear()
      let month = now.getMonth() + 1
      let day = now.getDate() + 1
      let nowDate = year + '/' + month + '/' + day
      console.log(nowDate)
      this.todos.push(this.newTweet)
      this.newTweet = ''
    },
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>

<style>
.inputBox {
  text-align: right;
}
.inputBox .textbox {
  width: 100%;
}
.inputBox .submit {
  margin: 0.3em;
}
</style>
