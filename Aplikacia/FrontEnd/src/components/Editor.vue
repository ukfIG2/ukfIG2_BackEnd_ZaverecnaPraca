<template>
    <div id="app">
        <ckeditor :editor="editor" v-model="editorData" :config="editorConfig" :disabled="editorDisabled"></ckeditor>
        <button @click="emptyEditor">Empty the editor</button>

        <h2>Editor data</h2>
        <code>{{ editorData }}</code>
    </div>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'app',
        data() {
            return {
                editor: ClassicEditor,
                editorData: '<p>Content of the editor.</p>',
                editorConfig: {
                    toolbar: [ 'bold', 'italic', '|', 'link' ]
                },
                editorDisabled: false
            };
        },
        methods: {
            emptyEditor() {
                this.editorData = '';
            }
        }
    }
</script>