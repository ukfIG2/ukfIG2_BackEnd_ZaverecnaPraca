<template>
  <div>
    <h2>Login Form</h2>
    <form @submit.prevent="login">
      <label for="Login">Email:</label>
      <input type="email" id="email" v-model="user.Login" required>

      <label for="Password">Password:</label>
      <input type="password" id="password" v-model="user.Password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import { useAuthStore } from '@/stores/authStore';

export default defineComponent({
  setup() {
    const user = ref({
      Login: '',
      Password: ''
    });

    const authStore = useAuthStore();

    const login = async () => {
      await authStore.login(user.value);
      console.log(authStore.$state); // Log the state of the authStore to the console
    }

    return {
      user,
      login
    }
  }
})
</script>