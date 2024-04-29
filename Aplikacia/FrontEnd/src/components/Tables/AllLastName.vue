<template>
  <div class="border border-5 m-3">
    <h2>Priezviská</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Priezvisko</th>
            <th>Vytvorené</th>
            <th>Upravené</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="record in records" :key="record.idLast_name">
            <td>{{ record.idLast_name }}</td>
            <td>{{ record.Last_name }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllLast_name');
    this.records = response.data;
  },
};
</script>

<style scoped>
</style>