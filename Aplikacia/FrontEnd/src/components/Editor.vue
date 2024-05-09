<template>
  <div>
    <div id="editor">
      <p>This is the editor content.</p>
    </div>
    <button @click="loadText">Load Text</button>
    <button @click="showHtml">Show HTML</button>
  </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import axios from 'axios'; // Import axios

let editorInstance = null;

export default {
  mounted() {
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        editorInstance = editor;
      })
      .catch(error => {
        console.error('There was a problem initializing the editor.', error);
      });
  },
  methods: {
    async loadText() {
      if (editorInstance) {
        try {
          const response = await axios.get('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/static-pages/nieco');
          editorInstance.setData(response.data);
        } catch (error) {
          console.error('There was a problem loading the text.', error);
        }
      }
    },
    async showHtml() {
      if (editorInstance) {
        try {
          const response = await axios.post('http://localhost/ukfIG2_BackEnd_ZaverecnaPraca/Aplikacia/BackEnd/public/api/static-pages/nieco', {
  text: editorInstance.getData()
});
          alert('Data sent successfully.');
        } catch (error) {
          console.error('There was a problem sending the data.', error);
        }
      }
    }
  }
};
</script>