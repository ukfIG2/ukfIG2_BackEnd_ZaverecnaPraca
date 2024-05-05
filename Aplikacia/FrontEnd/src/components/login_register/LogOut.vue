<template>
  <div>
    <h2>Logout</h2>
    <button @click="logout">Logout</button>
    <p v-if="errorMessage">{{ errorMessage }}</p>
  </div>
</template>

<script>
import axios from 'axios';

axios.defaults.withCredentials = true;

export default {
  data() {
    return {
      errorMessage: ''
    }
  },
  methods: {
    async logout() {
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

        // Then make the logout request
        const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/logout', {}, {
          headers: {
            'X-XSRF-TOKEN': csrfToken
          }
        });

        console.log('Logout response:', response.data);
      } catch (error) {
        // Handle error
        this.errorMessage = 'Logout failed. Please try again.';
        console.error(error);
      }
    }
  }
}
</script>