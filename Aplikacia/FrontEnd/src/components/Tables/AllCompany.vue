<template>
  <div class="border border-5 m-3">
    <h2>Firmy</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Company Name</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="record in records" :key="record.idCompany">
          <td>{{ record.idCompany }}</td>
          <td>{{ record.Company_name }}</td>
          <td>{{ record.created_at }}</td>
          <td>{{ record.updated_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';
import { useAuthStore } from '@/stores/authStore'; // adjust the path according to your project structure

export default {
  data() {
    return {
      records: [],
    };
  },
  async created() {
    const authStore = useAuthStore();
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllCompany', {
      headers: {
        'Authorization': `Bearer ${authStore.token}`
      }
    });
    this.records = response.data;
  },
};
</script>