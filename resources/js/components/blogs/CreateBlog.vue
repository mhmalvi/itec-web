<template>
  <form>
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label for="title">
            Blog Title <span class="text-danger">*</span></label
          >
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Blog title is required ..."
          />
        </div>
        <div class="form-group">
          <label for="slug">Blog's Slug</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="slug-url"
                >https://itecounsel.com/blog/</span
              >
            </div>
            <input
              type="text"
              class="form-control"
              id="slug"
              aria-describedby="slug-url"
              placeholder="Slug is a friendly version of your url ..."
            />
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <quill-editor
            theme="snow"
            :modules="modules"
            :toolbar="[
              [{ header: [1, 2, 3, 4, false] }],
              ['bold', 'italic', 'underline'],
              [
                { align: '' },
                { align: 'center' },
                { align: 'right' },
                { align: 'justify' },
              ],
              [{ list: 'ordered' }, { list: 'bullet' }],
              [{ indent: '-1' }, { indent: '+1' }],
              [{ color: [] }],
              ['link', 'image'],
            ]"
            v-model:content="formdata.description"
            contentType="html"
            @change="editorChange($event)"
          ></quill-editor>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="slug">Post Category</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
import { reactive } from "vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
export default {
  components: { QuillEditor },
  setup() {
    const formdata = reactive({
      description: "",
    });

    const modules = {
      handlers: {
        image: function () {
          document.getElementById("getFile").click();
        },
      },
    };

    return {
      formdata,
      onUploadImage,
      editorChange,
    };
  },
};
</script>
<style>
.ql-container {
  height: 500px !important;
}
</style>