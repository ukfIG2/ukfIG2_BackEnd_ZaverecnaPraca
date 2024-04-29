<template>
    <div class="border border-5 m-3">
        <h2>Zaregistrovaný účastníci</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Conference</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Token</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="participant in participants" :key="participant.Token">
                    <td>{{ participant.idParticipants }}</td>
                    <td>{{ participant.Short_title }}</td>
                    <td>{{ participant.First_name }}</td>
                    <td>{{ participant.Middle_name }}</td>
                    <td>{{ participant.Last_name }}</td>
                    <td>{{ participant.Email }}</td>
                    <td>{{ participant.Conference }}</td>
                    <td>{{ participant.created_at }}</td>
                    <td>{{ participant.updated_at }}</td>
                    <td class="text-break">{{ participant.Token }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      participants: [],
    };
  },
  async created() {
    const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/AllParticipants');
    this.participants = response.data;
  },
};
</script>