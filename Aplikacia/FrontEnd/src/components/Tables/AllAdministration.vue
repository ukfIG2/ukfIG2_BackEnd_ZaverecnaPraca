<template>
  <div class="border border-5 m-3">
    <h2>Admini</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Password</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="admin in admins" :key="admin.idAdministration">
            <td>{{ admin.idAdministration }}</td>
            <td>{{ admin.Login }}</td>
            <td class="text-break">{{ admin.Password }}</td> <!-- Add the text-break class here -->
            <td class="text-break">{{ admin.Comment }}</td> <!-- Add the text-break class here -->
            <td>{{ admin.created_at }}</td>
            <td>{{ admin.updated_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore';

export default {
  data() {
    return {
      admins: [],
    };
  },
  async created() {
    const authStore = useAuthStore();
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllAdministration', {
      headers: {
        Authorization: `Bearer ${authStore.$state.token}`
      }
    });
    this.admins = response.data;
  },
};
</script>