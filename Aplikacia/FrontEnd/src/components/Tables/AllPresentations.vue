<template>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Time Start</th>
          <th scope="col">Time End</th>
          <th scope="col">Short Description</th>
          <th scope="col">Long Description</th>
          <th scope="col">Max Capacity</th>
          <th scope="col">Comment</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="presentation in presentations" :key="presentation.idPresentations">
          <th scope="row">{{ presentation.idPresentations }}</th>
          <td>{{ presentation.Name }}</td>
          <td>{{ presentation.Time_start }}</td>
          <td>{{ presentation.Time_end }}</td>
          <td>{{ presentation.Short_description }}</td>
          <td>{{ presentation.Long_description }}</td>
          <td>{{ presentation.Max_capacity }}</td>
          <td>{{ presentation.Comment }}</td>
          <td>{{ presentation.created_at }}</td>
          <td>{{ presentation.updated_at }}</td>

        </tr>
      </tbody>
    </table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      presentations: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/presentations');
    this.presentations = response.data;
  },
};
</script>