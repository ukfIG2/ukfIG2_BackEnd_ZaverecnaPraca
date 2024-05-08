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
    loadText() {
      if (editorInstance) {
        editorInstance.setData('<p>New text to load.</p>\n<p>Another paragraph.</p>');
      }
    },
    showHtml() {
      if (editorInstance) {
        alert(editorInstance.getData());
      }
    }
  }
};
</script>