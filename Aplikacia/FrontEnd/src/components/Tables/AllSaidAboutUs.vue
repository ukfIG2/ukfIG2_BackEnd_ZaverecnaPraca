<template>
    <div class="border border-5 m-3">
    <h2>Povedali o nás</h2>
    <div class="table-responsive">
      <table class="table table-striped">      <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Text</th>
            <th>Company</th>
            <th>Position</th>
            <th>Comment</th>
            <th>created_at</th>
            <th>updated_at</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="record in records" :key="record.idSaid_about_us">
            <td>{{ record.idSaid_about_us }}</td>
            <td>{{ record.Short_title }}</td>
            <td>{{ record.First_name }}</td>
            <td>{{ record.Middle_name }}</td>
            <td>{{ record.Last_name }}</td>
            <td>
                <h5>{{ record.Image.Title }}</h5>
              <img 
                v-if="record.Image" 
                :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + record.Image.Path_to" 
                :alt="record.Image.Title" 
                style="width: 100px; height: 100px; object-fit: cover;"
              >
            </td>
            <td>{{ record.Text }}</td>
            <td>{{ record.Company }}</td>
            <td>{{ record.Position }}</td>
            <td>{{ record.Comment }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllSaid_about_us');
    this.records = response.data;
  },
};
</script>