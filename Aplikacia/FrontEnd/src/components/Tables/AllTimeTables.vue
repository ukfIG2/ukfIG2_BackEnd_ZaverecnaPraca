<template>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Start Time</th>
          <th scope="col">End Time</th>
          <th scope="col">Stage ID</th>
          <th scope="col">Comment</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="timetable in timetables" :key="timetable.idTime_tables">
          <th scope="row">{{ timetable.idTime_tables }}</th>
          <td>{{ timetable.Time_start }}</td>
          <td>{{ timetable.Time_end }}</td>
          <td>{{ timetable.idStage }}</td>
          <td>{{ timetable.Comment }}</td>
          <td>{{ timetable.created_at }}</td>
          <td>{{ timetable.updated_at }}</td>
        </tr>
      </tbody>
    </table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      timetables: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/timetables');
    this.timetables = response.data;
  },
};
</script>