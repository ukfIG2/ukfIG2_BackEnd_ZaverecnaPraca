<template>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Path</th>
          <th scope="col">ALT</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="image in images" :key="image.idImages">
          <td>{{ image.idImages }}</td>
          <td>{{ image.Title }}</td>
          <td>{{ image.Path_to }}</td>
          <td>{{ image.ALT }}</td>
        </tr>
      </tbody>
    </table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      images: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/images');
    this.images = response.data;
  },
};
</script>