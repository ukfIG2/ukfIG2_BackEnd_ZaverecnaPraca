<template>
  <div class="border border-5 m-3">
    <h2>Tituly</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Short Title</th>
            <th>Created At</th>
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="record in records" :key="record.idTitle">
            <td>{{ record.idTitle }}</td>
            <td>{{ record.Title }}</td>
            <td>{{ record.Short_title }}</td>
            <td>{{ record.created_at }}</td>
            <td>{{ record.updated_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllTitle');
    this.records = response.data;
  },
};
</script>


