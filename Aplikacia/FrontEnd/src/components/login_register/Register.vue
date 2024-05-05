<template>
  <div>
    <h2>Register</h2>
    <form @submit.prevent="register">
      <input v-model="credentials.Login" type="text" placeholder="Login" required>
      <input v-model="credentials.Password" type="password" placeholder="Password" required>
      <!-- Add any other fields you need for registration -->
      <button type="submit">Register</button>
      <p v-if="errorMessage">{{ errorMessage }}</p>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

axios.defaults.withCredentials = true;

export default {
  data() {
    return {
      credentials: {
        Login: '',
        Password: ''
        // Add any other fields you need for registration
      },
      errorMessage: ''
    }
  },
  methods: {
    async register() {
      try {
        // First get the CSRF cookie
        await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/sanctum/csrf-cookie');

        // Extract the CSRF token
        const csrfTokenCookie = document.cookie.split('; ').find(row => row.startsWith('XSRF-TOKEN='));

        if (!csrfTokenCookie) {
          throw new Error('CSRF token cookie not found');
        }

        // Decode the CSRF token
        const csrfToken = decodeURIComponent(csrfTokenCookie.split(/=(.+)/)[1]);

        // Then make the registration request
        const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/register', this.credentials, {
          headers: {
            'X-XSRF-TOKEN': csrfToken
          }
        });

        console.log('Registration response:', response.data);

        // Clear the fields
        this.credentials.Login = '';
        this.credentials.Password = '';
        // Clear any other fields you added for registration
      } catch (error) {
        // Handle error
        this.errorMessage = 'Registration failed. Please check your information and try again.';
        console.error(error);
      }
    }
  }
}
</script>