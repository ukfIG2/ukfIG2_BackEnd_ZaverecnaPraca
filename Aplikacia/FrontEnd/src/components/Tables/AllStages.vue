<template>
  <div class="border border-5 m-3">
    <h2>Stages</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title of conference</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="stage in stages" :key="stage.idStage">
            <td>{{ stage.idStage }}</td>
            <td>{{ stage.Name }}</td>
            <td>{{ stage.Title_of_conference }}</td>
            <td>{{ stage.Comment }}</td>
            <td>{{ stage.created_at }}</td>
            <td>{{ stage.updated_at }}</td>
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
      stages: [],
    };
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllStages')
      .then(response => {
        this.stages = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>