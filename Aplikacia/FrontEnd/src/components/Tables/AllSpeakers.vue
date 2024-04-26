<template>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Position</th>
            <th scope="col">Company</th>
            <th scope="col">Short Description</th>
            <th scope="col">Long Description</th>
            <th scope="col">Comment</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="speaker in speakers" :key="speaker.idSpeakers">
            <td>{{ speaker.idSpeakers }}</td>
            <td>{{ speaker.Short_title }}</td>
            <td>{{ speaker.First_name }}</td>
            <td>{{ speaker.Middle_name }}</td>
            <td>{{ speaker.Last_name }}</td>
            <td>{{ speaker.Position }}</td>
            <td>{{ speaker.Company }}</td>
            <td>{{ speaker.Short_description }}</td>
            <td>{{ speaker.Long_description }}</td>
            <td>{{ speaker.Comment }}</td>
          </tr>
        </tbody>
      </table>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        speakers: [],
      };
    },
    async created() {
      const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/speakers');
      this.speakers = response.data;
    },
  };
  </script>