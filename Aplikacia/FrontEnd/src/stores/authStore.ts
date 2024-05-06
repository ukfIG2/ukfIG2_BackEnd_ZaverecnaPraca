// store/authStore.ts
import { defineStore } from 'pinia';
import axios from 'axios';

interface State {
  token: string | null;
}

export const useAuthStore = defineStore('auth', {
  state: (): State => ({
    token: null,
  }),
  actions: {
    setToken(token: string) {
      this.token = token;
    },
    clearToken() {
        this.token = null;
      },
    async login(user: { Login: string; Password: string }) {
      try {
        const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/login', user);
        this.setToken(response.data.token);
      } catch (error) {
        console.error(error);
      }
    }
  }
});