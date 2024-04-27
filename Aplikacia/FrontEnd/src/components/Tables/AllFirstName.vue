<template>
    <div class="border border-5 m-3">
        <h2>Krstne mená</h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="record in records" :key="record.idFirst_name">
            <td>{{ record.idFirst_name }}</td>
            <td>{{ record.First_name }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/first_name');
    this.records = response.data;
  },
};
</script>

