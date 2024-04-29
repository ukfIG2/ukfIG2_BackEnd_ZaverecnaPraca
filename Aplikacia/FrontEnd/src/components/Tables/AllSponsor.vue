<template>
    <div class="border border-5 m-3">
    <h2>Sponzory</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Sponsor Name</th>
            <th>URL</th>
            <th>Conference</th>
            <th>Image</th>
            <th>Comment</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="sponsor in sponsors" :key="sponsor.idSponsor">
            <td>{{ sponsor.idSponsor }}</td>
            <td>{{ sponsor.Sponsor_name }}</td>
            <td><a :href="sponsor.Url">{{ sponsor.Url }}</a></td>
            <td>{{ sponsor.Conference }}</td>
            <td>
              <h5 v-if="sponsor.Images">{{ sponsor.Images.Title }}</h5>
              <img 
                v-if="sponsor.Images" 
                :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + sponsor.Images.Path_to" 
                :alt="sponsor.Images.ALT"
                style="width: 200px; height: 200px; object-fit: cover;"
              >
            </td>
            <td>{{ sponsor.Comment }}</td>
            <td>{{ sponsor.created_at }}</td>
            <td>{{ sponsor.updated_at }}</td>
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
      sponsors: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllSponsor');
    this.sponsors = response.data;
  },
};
</script>