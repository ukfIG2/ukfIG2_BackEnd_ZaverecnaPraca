<template>
    <div class="border border-5 m-3">
    <h2>Sociálne siete</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>URL</th>
          <th>Image</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="site in socialSites" :key="site.idSocial_site">
          <td>{{ site.idSocial_site }}</td>
          <td>{{ site.Title }}</td>
          <td><a :href="site.Url">{{ site.Url }}</a></td>
            <td>
            <h5>{{ site.Images.Title }}</h5>
            <img :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + site.Images.Path_to" :alt="site.Images.ALT" width="100" height="100"></td>
          <td>{{ site.created_at }}</td>
          <td>{{ site.updated_at }}</td>
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
      socialSites: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllSocial_site');
    this.socialSites = response.data;
  },
};
</script>