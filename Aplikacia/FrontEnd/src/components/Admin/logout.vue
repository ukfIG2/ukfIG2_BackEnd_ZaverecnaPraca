<template>
  <button @click="logout">Logout</button>
</template>

<script>
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore';

export default {
  methods: {
    logout() {
  const authStore = useAuthStore();
  const token = authStore.token; // Get the token directly from the authStore

  console.log('Token:', token); // Log the token

  axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/logout', {}, {
    headers: {
      'Authorization': `Bearer ${token}`
    }
  })
  .then(() => {
    authStore.clearToken(); // Clear the token from the authStore
    // Redirect user to login page
  })
  .catch(error => {
    console.error('Error during logout:', error);
    console.error('Error details:', error.response.data); // Log the server's response data
  });
}  }
}
</script>