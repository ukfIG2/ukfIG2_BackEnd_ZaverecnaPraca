<template>
  <div class="border border-5 m-3">
    <h2>Positions</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Position Name</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="record in records" :key="record.idPosition">
          <td>{{ record.idPosition }}</td>
          <td>{{ record.Position_name }}</td>
          <td>{{ record.created_at }}</td>
          <td>{{ record.updated_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script lang="ts">
import axios from 'axios';

export default {
  data() {
    return {
      records: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/position');
    this.records = response.data;
  },
};
</script>