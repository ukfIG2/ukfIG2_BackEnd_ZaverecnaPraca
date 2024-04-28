<template>
    <div class="border border-5 m-3">
    <h2>Povedali o nás</h2>
    <table class="table table-striped">      <thead>
        <tr>
          <th>Title</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Image</th>
          <th>Text</th>
          <th>Comment</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="record in records" :key="record.idSaid_about_us">
          <td>{{ record.Title }}</td>
          <td>{{ record.FirstName }}</td>
          <td>{{ record.MiddleName }}</td>
          <td>{{ record.LastName }}</td>
          <td>
            <img 
              v-if="record.Image" 
              :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + record.Image" 
              alt="Image" 
              style="width: 100px; height: 100px; object-fit: cover;"
            >
          </td>
          <td>{{ record.Text }}</td>
          <td>{{ record.Comment }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/said_about_us');
    this.records = response.data;
  },
};
</script>