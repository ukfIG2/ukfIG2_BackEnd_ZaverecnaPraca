<template>
<div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">State</th>
        <th scope="col">Comment</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(conference, index) in conferences" :key="index">
        <th scope="row">{{ index + 1 }}</th>
        <td>{{ conference.Title }}</td>
        <td>{{ new Date(conference.Date).toLocaleDateString() }}</td>
        <td>{{ conference.State }}</td>
        <td>{{ conference.Comment }}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>

<script>
export default {
data() {
  return {
    conferences: [],
  };
},
async created() {
  const response = await fetch("http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/conferences");
  this.conferences = await response.json();
},
};
</script>