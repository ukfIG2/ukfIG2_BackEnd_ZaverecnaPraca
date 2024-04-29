<template>
  <div class="border border-5 m-3">
    <h2>Presentations</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Conference name</th>
            <th>Stage Name</th>
            <th>Time Table</th>
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
            <td>{{ presentation.Conference_name }}</td>
            <td>{{ presentation.Stage_name }}</td>
            <td>{{ presentation.Time_tables }}</td>
            <td class="text-break">{{ presentation.Short_description }}</td>
            <td class="text-break">{{ presentation.Long_description }}</td>
            <td>{{ presentation.Max_capacity }}</td>
            <td>{{ presentation.Comment }}</td>
            <td class="text-break">{{ presentation.created_at }}</td>
            <td class="text-break">{{ presentation.updated_at }}</td>
            <td>
              <ul>
                <li v-for="speaker in presentation.Speakers" :key="speaker.First_name">
                  {{ speaker.Title }}. {{ speaker.First_name }} 
                  {{ speaker.Middle_name }} {{ speaker.Last_name }}
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
    axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllPresentations')
      .then(response => {
        this.presentations = response.data
      })
  }
}
</script>