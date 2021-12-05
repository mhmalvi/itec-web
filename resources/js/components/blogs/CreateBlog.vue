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
            v-model:value="state.content"
            :options="state.editorOption"
            @blur="onEditorChange($event)"
          />
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
import { quillEditor, Quill } from "vue3-quill";
import ImageUploader from "quill-image-uploader";
import { reactive } from "vue";
import axios from "axios";

Quill.register("modules/imageUploader", ImageUploader);
export default {
  components: {
    quillEditor,
  },
  setup() {
    const state = reactive({
      _content: "",
      editorOption: {
        placeholder: "core",
        modules: {
          imageUploader: {
            upload: (file) => {
              return new Promise((resolve, reject) => {
                let fd = new FormData();
                fd.append("file", file);
                axios.post("admin/media-upload", fd).then((res) => {
                  setTimeout(() => {
                    resolve(`${res.data.url}`);
                  }, 3500);
                });
              });
            },
          },
        },
        // more options
      },
    });

    const onEditorBlur = (quill) => {
      console.log("editor blur!", quill);
    };
    const onEditorFocus = (quill) => {
      console.log("editor focus!", quill);
    };
    const onEditorReady = (quill) => {
      console.log("editor ready!", quill);
    };
    const onEditorChange = ({ quill, html, text }) => {
      state._content = html;
      console.log(html);
    };

    return {
      state,
      onEditorBlur,
      onEditorFocus,
      onEditorReady,
      onEditorChange,
    };
  },
};
</script>
<style>
.ql-container {
  height: 500px !important;
}
</style>