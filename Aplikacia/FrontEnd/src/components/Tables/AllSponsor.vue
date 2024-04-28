<template>
    <div class="border border-5 m-3">
    <h2>Sponzory</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Sponsor Name</th>
          <th>URL</th>
          <th>Conference</th>
          <th>Image</th>
          <th>Comment</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="sponsor in sponsors" :key="sponsor.idSponsor">
          <td>{{ sponsor.idSponsor }}</td>
          <td>{{ sponsor.Sponsor_name }}</td>
          <td><a :href="sponsor.Url">{{ sponsor.Url }}</a></td>
          <td>{{ sponsor.Conference }}</td>
          <td>
            <img 
              v-if="sponsor.Image" 
              :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + sponsor.Image" 
              :alt="sponsor.Alt"

              style="width: 200px; height: 200px; object-fit: cover;"
            >
          </td>
          <td>{{ sponsor.Comment }}</td>
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
      sponsors: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/sponsor');
    this.sponsors = response.data;
  },
};
</script>