<template>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Conference ID</th>
          <th scope="col">Image ID</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="gallery in galleries" :key="gallery.idGallery">
          <td>{{ gallery.idGallery }}</td>
          <td>{{ gallery.idConference }}</td>
          <td>{{ gallery.idImages }}</td>
          <td><img :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + gallery.image.Path_to" 
            :alt="gallery.image.ALT"
            style="width: 200px; height: 200px; object-fit: cover;">
        </td>
        </tr>
      </tbody>
    </table>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/gallery');
    this.galleries = response.data;
  },
};
</script>