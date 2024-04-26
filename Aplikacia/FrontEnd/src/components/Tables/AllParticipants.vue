<template>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">First Name</th>
          <th scope="col">Middle Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Conference</th>
          <th scope="col">Email</th>
          <th scope="col">Token</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="participant in participants" :key="participant.idParticipants">
          <th scope="row">{{ participant.idParticipants }}</th>
          <td>{{ participant.Short_title }}</td>
          <td>{{ participant.First_name }}</td>
          <td>{{ participant.Middle_name }}</td>
          <td>{{ participant.Last_name }}</td>
          <td>{{ participant.Conference }}</td>
          <td>{{ participant.Email }}</td>
          <td>{{ participant.Token }}</td>
          <td>{{ participant.created_at }}</td>
          <td>{{ participant.updated_at }}</td>
        </tr>
      </tbody>
    </table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      participants: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/participants');
    this.participants = response.data;
  },
};
</script>