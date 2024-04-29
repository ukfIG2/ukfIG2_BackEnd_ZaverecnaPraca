<template>
  <div class="border border-5 m-3">
    <h2>Fotky</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Path</th>
          <th>ALT</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="record in records" :key="record.idImages">
          <td>{{ record.idImages }}</td>
          <td>{{ record.Title }}</td>
          <td>{{ record.Path_to }}</td>
          <td>{{ record.ALT }}</td>
          <td>{{ record.created_at }}</td>
          <td>{{ record.updated_at }}</td>
<td><img :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + record.Path_to" :alt="record.ALT" width="100" height="100"></td>        </tr>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllImages');
    this.records = response.data;
  },
};
</script>