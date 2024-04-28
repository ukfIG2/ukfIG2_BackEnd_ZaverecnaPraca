<template>
  <div class="border border-5 m-3">
    <h2>Prostredné mená</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Middle Name</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="record in records" :key="record.idMiddle_name">
          <td>{{ record.idMiddle_name }}</td>
          <td>{{ record.Middle_name }}</td>
          <td>{{ record.created_at }}</td>
          <td>{{ record.updated_at }}</td>
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
      records: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/middle_name');
    this.records = response.data;
  },
};
</script>

<style scoped>
</style>