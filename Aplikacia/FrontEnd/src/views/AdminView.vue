<!--
<script setup lang="ts">
import AllAdministration from '../components/Tables/AllAdministration.vue'

import AllFirstName from '../components/Tables/AllFirstName.vue'
import AllTitle from '../components/Tables/AllTitle.vue'
import AllMiddleName from '../components/Tables/AllMiddleName.vue'
import AllLastName from '../components/Tables/AllLastName.vue'

import AllPosition from '../components/Tables/AllPosition.vue'
import AllCompany from '../components/Tables/AllCompany.vue'
import AllImages from '../components/Tables/AllImages.vue'

import AllSocialSite from '../components/Tables/AllSocialSite.vue'
import AllEmail from '../components/Tables/AllEmail.vue'

import AllConferences from '../components/Tables/AllConferences.vue'
import AllStages from '../components/Tables/AllStages.vue'
import AllTimeTables from '../components/Tables/AllTimeTables.vue'
import AllPresentations from '../components/Tables/AllPresentations.vue'

import AllSpeakers from '../components/Tables/AllSpeakers.vue'
import AllParticipants from '../components/Tables/AllParticipants.vue'
import AllSaidAboutUs from '../components/Tables/AllSaidAboutUs.vue'
import AllSponsor from '../components/Tables/AllSponsor.vue'

import AllGallery from '../components/Tables/AllGallery.vue'

</script>
    
<template>
  <div>
    <h1>Toto je admin page</h1>
  </div>
  <AllAdministration/>

  <AllTitle/>
  <AllFirstName/>
  <AllMiddleName/>
  <AllLastName/>

  <AllCompany/>
  <AllPosition/>
  <AllImages/>

  <AllSocialSite/>
  <AllEmail/>

  <AllConferences/>
  <AllStages/>
  <AllTimeTables/>
  <AllPresentations/>

  <AllSpeakers/>
  <AllParticipants/>
  <AllSaidAboutUs/>
  <AllSponsor/>

  <AllGallery/>


</template>

<script>

</script>
-->

<template>
  <div class="border border-5 m-3">
    <h1>Toto je admin page</h1>

    <!-- Dropdown for selecting a table -->
    <select class="form-select" v-model="selectedTable">
      <!-- Loop over each table in the tables array -->
      <option v-for="table in tables" :key="table" :value="table">{{ table }}</option>
    </select>

    <!-- Display the selected table -->
    <component :is="selectedTable"></component>
  </div>
</template>

<script lang="ts">
// Import all the table components
import Administration_table from '../components/Tables/AllAdministration.vue'//Toto je urobene

import Title_table from '../components/Tables/AllTitle.vue'
import FirstName_table from '../components/Tables/AllFirstName.vue'
import MiddleName_table from '../components/Tables/AllMiddleName.vue'
import LastName_table from '../components/Tables/AllLastName.vue'

import Position_table from '../components/Tables/AllPosition.vue'

import Conferences_table from '../components/Tables/AllConferences.vue'
import Stages_table from '../components/Tables/AllStages.vue'
import TimeTables_table from '../components/Tables/AllTimeTables.vue'
import Presentations_table from '../components/Tables/AllPresentations.vue'

import Company_table from '../components/Tables/AllCompany.vue'
import Images_table from '../components/Tables/AllImages.vue'
import SocialSite_table from '../components/Tables/AllSocialSite.vue'
import Email_table from '../components/Tables/AllEmail.vue'

import Speakers_table from '../components/Tables/AllSpeakers.vue'
import Participants_table from '../components/Tables/AllParticipants.vue'
import SaidAboutUs_table from '../components/Tables/AllSaidAboutUs.vue'
import Sponsor_table from '../components/Tables/AllSponsor.vue'
import Gallery_table from '../components/Tables/AllGallery.vue'

import AdminRegister from '../components/Admin/register.vue'
import AdminLogin from '../components/Admin/login.vue'
import AdminLogout from '../components/Admin/logout.vue'

import Editor from '../components/Editor.vue'

// Define the component

export default {
  components: {
    Administration_table,

    Title_table,
    FirstName_table,
    MiddleName_table,
    LastName_table,

    Position_table,

    Conferences_table,
    Stages_table,
    TimeTables_table,
    Presentations_table,

    Company_table,
    Images_table,
    SocialSite_table,
    Email_table,
    
    Speakers_table,
    Participants_table,
    SaidAboutUs_table,
    Sponsor_table,
    Gallery_table,

    AdminRegister,
    AdminLogin,
    AdminLogout,

    Editor,

    // Add other components as needed
  },
  data() {
    return {
      selectedTable: 'Administration_table', // Default table
    }
  },
  computed: {
    tables() {
      return this.$options.components ? Object.keys(this.$options.components) : [];
    }
  }
}
</script>

