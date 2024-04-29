<template>
  <div class="border border-5 m-3">
    <h2>Gallery</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Conference</th>
          <th>Image</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="gallery in galleries" :key="gallery.idSponsor">
          <td>{{ gallery.idGallery }}</td>
          <td>{{ gallery.Conference }}</td>
          <td>
        <img 
          :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + gallery.Path_to" 
          :alt="gallery.ALT" 
          width="100" 
          height="100">
      </td>
          <td>{{ gallery.created_at }}</td>
          <td>{{ gallery.updated_at }}</td>
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
      galleries: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllGallery');
    this.galleries = response.data;
  },
};
</script>