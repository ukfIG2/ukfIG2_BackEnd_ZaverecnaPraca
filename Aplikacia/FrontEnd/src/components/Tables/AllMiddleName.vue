<template>
  <div class="border border-5 m-3">
    <h2>Prostredné mená</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Prostredné meno</th>
            <th>Vytvorené</th>
            <th>Upravené</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="middle_name in records" :key="middle_name.idMiddle_name">
            <td>{{ middle_name.idMiddle_name }}</td>
            <td>{{ middle_name.Middle_name }}</td>
            <td>{{ middle_name.created_at }}</td>
            <td>{{ middle_name.updated_at }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllMiddle_name');
    this.records = response.data;
  },
};
</script>
