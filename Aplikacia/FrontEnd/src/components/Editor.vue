<template>
  <div id="editor">
    <p>This is the editor content.</p>
  </div>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
  mounted() {
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        window.editor = editor;
      })
      .catch(error => {
        console.error('There was a problem initializing the editor.', error);
      });
  }
};
</script>