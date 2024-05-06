<template>
  <div>
    <h2>Registration Form</h2>
    <form @submit.prevent="register">
      <label for="Login">Email:</label>
      <input type="email" id="email" v-model="user.Login" required>

      <label for="Password">Password:</label>
      <input type="password" id="password" v-model="user.Password" required>

      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      user: {
        Login: '',
        Password: ''
      }
    }
  },
  methods: {
    async register() {
      try {
        const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/register', this.user);
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    }
  }
}
</script>