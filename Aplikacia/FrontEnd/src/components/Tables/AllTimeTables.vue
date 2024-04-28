<template>
  <div class="border border-5 m-3">
    <h2>Tabuľka časových plánov</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Conference ID</th>
            <th>Stage ID</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>

          </tr>
        </thead>
        <tbody>
          <tr v-for="timeTable in timeTables" :key="timeTable.idTime_tables">
            <td>{{ timeTable.idTime_tables }}</td>
            <td>{{ timeTable.idConference }}</td>
            <td>{{ timeTable.idStage }}</td>
            <td>{{ timeTable.Time_start }}</td>
            <td>{{ timeTable.Time_end }}</td>
            <td>{{ timeTable.Comment }}</td>
            <td>{{ timeTable.created_at }}</td>
            <td>{{ timeTable.updated_at }}</td>
            
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
      timeTables: [],
    };
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/time_tables')
      .then(response => {
        this.timeTables = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>