<template>
  <div class="border border-5 m-3">
    <h2>Emaily</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="email in emails" :key="email.idEmail">
          <td>{{ email.idEmail }}</td>
          <td>{{ email.Email }}</td>
          <td>{{ email.created_at }}</td>
          <td>{{ email.updated_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      emails: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/email');
    this.emails = response.data;
  },
};
</script>