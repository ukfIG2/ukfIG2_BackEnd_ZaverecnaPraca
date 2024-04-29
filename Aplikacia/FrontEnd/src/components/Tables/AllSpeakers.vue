<template>
  <div class="border border-5 m-3">
    <h2>Speakers</h2>
    <div class="table-responsive">
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Position</th>
          <th>Company</th>
          <th>Short Description</th>
          <th>Long Description</th>
          <th>Comment</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Images</th>
          <th>Social Sites</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="speaker in speakers" :key="speaker.idSpeakers">
          <td>{{ speaker.idSpeaker }}</td>
          <td>{{ speaker.Short_title }}</td>
          <td>{{ speaker.First_name }}</td>
          <td>{{ speaker.Middle_name }}</td>
          <td>{{ speaker.Last_name }}</td>
          <td>{{ speaker.Position }}</td>
          <td>{{ speaker.Company }}</td>
          <td>{{ speaker.Short_description }}</td>
          <td>{{ speaker.Long_description }}</td>
          <td>{{ speaker.Comment }}</td>
          <td>{{ speaker.created_at }}</td>
          <td>{{ speaker.updated_at }}</td>
          <td>
            <ul>
              <li v-for="image in speaker.Image" :key="image.Title">
                {{ image.Title }}: {{ image.Path_to }}
              </li>
            </ul>
          </td>
          <td>
            <ul>
              <li v-for="site in speaker.Social_sites" :key="site.Title">
                {{ site.Title }}: {{ site.Url }}
              </li>
            </ul>
          </td>
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
      speakers: [],
    };
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllSpeakers')
      .then(response => {
        this.speakers = response.data;
      })
      .catch(error => {
        console.error(error);
      });
  },
};
</script>