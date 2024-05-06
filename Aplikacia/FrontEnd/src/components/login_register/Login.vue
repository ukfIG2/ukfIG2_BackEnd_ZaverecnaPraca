<template>
  <div>
    <h2>Login</h2>
    <form @submit.prevent="login">
      <input v-model="credentials.Login" type="text" placeholder="Login" required>
      <input v-model="credentials.Password" type="password" placeholder="Password" required>
      <button type="submit">Login</button>
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
      },
      errorMessage: ''
    }
  },
  methods: {
   /* async login() {
      try {
        // First get the CSRF cookie
        await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/sanctum/csrf-cookie');

        // Extract the CSRF token
        const csrfTokenCookie = document.cookie.split('; ').find(row => row.startsWith('XSRF-TOKEN='));
        console.log('CSRF token cookie:', csrfTokenCookie);

        if (!csrfTokenCookie) {
          throw new Error('CSRF token cookie not found');
        }

        // Decode the CSRF token
        const csrfToken = decodeURIComponent(csrfTokenCookie.split(/=(.+)/)[1]);
        console.log('CSRF token:', csrfToken);

        // Then make the login request
        const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/login', this.credentials, {
          headers: {
            'X-XSRF-TOKEN': csrfToken
          }
        });
        console.log('Login response:', response.data);

        // Check for a session cookie
const sessionCookie = document.cookie.split('; ').find(row => row.startsWith('laravel_session='));
console.log('Session cookie:', sessionCookie);

if (!sessionCookie) {
  throw new Error('Session cookie not found');
}

        // Clear the password field
        this.credentials.Password = '';
      } catch (error) {
        // Handle error
        this.errorMessage = 'Login failed. Please check your credentials and try again.';
        console.error(error);
      }
    }*/
///pokus2
/*
    async login() {
  try {
    // First get the CSRF cookie
    await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/sanctum/csrf-cookie');

    // Extract the CSRF token
    const csrfTokenCookie = document.cookie.split('; ').find(row => row.startsWith('XSRF-TOKEN='));
    console.log('CSRF token cookie:', csrfTokenCookie);

    if (!csrfTokenCookie) {
      throw new Error('CSRF token cookie not found');
    }

    // Decode the CSRF token
    const csrfToken = decodeURIComponent(csrfTokenCookie.split(/=(.+)/)[1]);
    console.log('CSRF token:', csrfToken);

    // Then make the login request
    const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/login', this.credentials, {
      headers: {
        'X-XSRF-TOKEN': csrfToken
      }
    });
    console.log('Login response:', response.data);

    // Check for a session cookie
    const sessionCookie = document.cookie.split('; ').find(row => row.startsWith('laravel_session='));
    console.log('Session cookie:', sessionCookie);

    if (!sessionCookie) {
      throw new Error('Session cookie not found');
    }

    // Clear the password field
    this.credentials.Password = '';
  } catch (error) {
    // Handle error
    console.error(error);
    this.errorMessage = 'Login failed. Please check your credentials and try again.';
  }
}
*/
async login() {
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

    // Then make the login request
    const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/login', this.credentials, {
      headers: {
        'X-XSRF-TOKEN': csrfToken
      }
    });
    console.log('Login response:', response.data);

    // Check for a session cookie
    const sessionCookie = document.cookie.split('; ').find(row => row.startsWith('laravel_session='));
    console.log('Session cookie:', sessionCookie);
    console.log('All cookies:', document.cookie);

/*
    if (!sessionCookie) {
      throw new Error('Session cookie not found');
    }
*/
    // Clear the password field
    this.credentials.Password = '';
  } catch (error) {
    // Log the error
    console.error('Error during login:', error);
    this.errorMessage = 'Login failed. Please check your credentials and try again.';
  }
}

  }
}
</script>