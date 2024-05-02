<template>
    <div>
      <h2>Login</h2>
      <form @submit.prevent="submitLogin">
        <div>
          <label for="login">Login:</label>
          <input type="text" id="login" v-model="login">
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" v-model="password">
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        login: '',
        password: '',
      };
    },
    methods: {
      async submitLogin() {
        try {
          const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/tokens/create', {
            login: this.login,
            password: this.password,
          });
  
          console.log(response.data.token);
        } catch (error) {
          console.error(error);
        }
      },
    },
  };
  </script>