<template>
  <div class="border border-5 m-3">
    <h2>Conferences</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>State</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="conference in conferences" :key="conference.idConference">
            <td>{{ conference.idConference }}</td>
            <td>{{ conference.Title }}</td>
            <td>{{ conference.Date }}</td>
            <td>{{ conference.State }}</td>
            <td>{{ conference.Comment }}</td>
            <td>{{ conference.created_at }}</td>
            <td>{{ conference.updated_at }}</td>
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
      conferences: [],
    };
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllConferences')
      .then(response => {
        this.conferences = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>