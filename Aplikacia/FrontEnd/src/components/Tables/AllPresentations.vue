<template>
  <div class="border border-5 m-3">
    <h2>Presentations</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Conference Title</th>
            <th>Stage Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Max Capacity</th>
            <th>Comment</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Speakers</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="presentation in presentations" :key="presentation.idPresentations">
            <td>{{ presentation.idPresentations }}</td>
            <td>{{ presentation.ConferenceTitle }}</td>
            <td>{{ presentation.StageName }}</td>
            <td>{{ presentation.Time_start }}</td>
            <td>{{ presentation.Time_end }}</td>
            <td>{{ presentation.Short_description }}</td>
            <td>{{ presentation.Long_description }}</td>
            <td>{{ presentation.Max_capacity }}</td>
            <td>{{ presentation.Comment }}</td>
            <td>{{ presentation.created_at }}</td>
            <td>{{ presentation.updated_at }}</td>
            <td>
              <ul>
                <li v-for="speaker in presentation.Speakers" :key="speaker.First_name">
                  {{ speaker.Title }}: {{ speaker.First_name }} {{ speaker.Middle_name }} {{ speaker.Last_name }}
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
import axios from 'axios'

export default {
  data() {
    return {
      presentations: []
    }
  },
  created() {
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/presentations')
      .then(response => {
        this.presentations = response.data.data
      })
  }
}
</script>