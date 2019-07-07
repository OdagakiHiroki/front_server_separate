<template>
  <div class="about">
    <h1>This is an about page</h1>
    <button type="button" @click="getRequest()">getリクエストを投げる</button>
    <button type="button" @click="postRequest({'test': 'postTest'})">postリクエストを投げる</button>
    <p>レスポンスは以下</p>
    <p>{{ this.responseData }}</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data: function(){
    return{
      responseData: '',
    }
  },
  methods:{
    'getRequest': function(){
      let self = this;
      axios({
        method: 'get',
        url: 'http://laravel_api/api/testapis',
        data: {}
      })
      .then((response) => {
        self.responseData = response;
      })
      .catch((response) => {
        self.responseData = 'error:' + response;
      })
    },
    'postRequest': function(requestData){
      let self = this;
      axios({
        method: 'post',
        url: 'http://laravel_api/api/testapis',
        data: requestData
      })
      .then((response) => {
        self.responseData = response;
      })
      .catch((response) => {
        self.responseData = 'error:' + response;
      })
    }
  }
}
</script>
