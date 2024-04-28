<template>
  <div class="border border-5 m-3">
    <h2>Prezentácie</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Conference</th>
            <th>Stage</th>

            <th>Name</th>
            <th>Time Start</th>
            <th>Time End</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Max Capacity</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Prezentujúci</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="presentation in presentations" :key="presentation.idPresentations">
            <td>{{ presentation.idPresentations }}</td>
            <td>{{ presentation.idConference }}</td>
            <td>{{ presentation.idStage }}</td>


            <td>{{ presentation.Name }}</td>
            <td>{{ presentation.Time_start }}</td>
            <td>{{ presentation.Time_end }}</td>
            <td>{{ presentation.Short_description }}</td>
            <td>{{ presentation.Long_description }}</td>
            <td>{{ presentation.Max_capacity }}</td>
            <td>{{ presentation.Comment }}</td>
            <td>{{ presentation.created_at }}</td>
            <td>{{ presentation.updated_at }}</td>
            <td>{{ 
                (presentation.Title && presentation.Title.Title ? presentation.Title.Title : '') + ' ' +
                (presentation.First_name && presentation.First_name.First_name ? presentation.First_name.First_name : '') + ' ' +
                (presentation.Middle_name && presentation.Middle_name.Middle_name ? presentation.Middle_name.Middle_name : '') + ' ' +
                (presentation.Last_name && presentation.Last_name.Last_name ? presentation.Last_name.Last_name : '')
}}</td>         
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
      presentations: [],
    };
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/presentations')
      .then(response => {
        this.presentations = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>