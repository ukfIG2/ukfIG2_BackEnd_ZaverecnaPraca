<template>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Conference ID</th>
          <th scope="col">Comment</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(stage, index) in stages" :key="index">
          <th scope="row">{{ index + 1 }}</th>
          <td>{{ stage.Name }}</td>
          <td>{{ stage.idConference }}</td>
          <td>{{ stage.Comment }}</td>
          <td>{{ new Date(stage.created_at).toLocaleDateString() }}</td>
          <td>{{ new Date(stage.updated_at).toLocaleDateString() }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      stages: [],
    };
  },
  async created() {
    const response = await fetch("http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/stages");
    this.stages = await response.json();
  },
};
</script>