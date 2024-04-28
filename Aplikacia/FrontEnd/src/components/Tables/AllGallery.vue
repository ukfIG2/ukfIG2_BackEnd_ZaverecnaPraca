<template>
  <div class="border border-5 m-3">
    <h2>Gallery</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Conference Title</th>
          <th>Image</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="gallery in galleries" :key="gallery.idGallery">
          <td>{{ gallery.idGallery }}</td>
          <td>{{ gallery.conference_title }}</td>
<td>
  <img :src="'http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/' + gallery.image_path" 
       :alt="gallery.image_alt" 
       width="100" 
       height="100">
</td><td>{{ gallery.created_at }}</td>
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
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/gallery');
    this.galleries = response.data;
  },
};
</script>