<template>
  <form @submit.prevent="handleFormSubmit()">
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
            v-model="form.title"
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
              v-model="form.slug"
            />
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description</label>

          <quill-editor contentType="html" v-model:content="form.description" />
        </div>

        <div class="form-group d-flex justify-content-end">
          <button class="btn btn-outline-primary">
            <i class="fas fa-plus mr-2"></i>
            Save
          </button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="slug">Post Category</label>
              <select
                id="inputState"
                class="form-control"
                v-model="form.category_id"
              >
                <option selected>Choose...</option>
                <option value="1">Category 1</option>
              </select>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="form-group img-container">
              <label for="featured_image" class="form-label"
                >Click here to upload image</label
              >
              <div class="img-wrapper">
                <img :src="form.featured_image" class="img-fluid" />
                <a
                  href="javascript:void(0)"
                  @click.prevent="imgDeleteHandler(null, 'featured_image')"
                  class="text-danger d-block img-remove"
                  v-if="form.featured_image"
                >
                  <i class="fas fa-times"></i>
                </a>
                <input
                  type="file"
                  class="form-control"
                  id="featured_image"
                  @change="handleFeaturedImageChange"
                  hidden
                />
              </div>
            </div>
            <div class="form-group">
              <label for="featured_image_title" class="form-label"
                >Featured Image Title(optional)</label
              >
              <input
                type="text"
                name="featured_image_title"
                class="form-control form-control-sm"
                v-model="form.featured_image_title"
              />
            </div>
            <div class="form-group">
              <label for="featured_image_alt" class="form-label"
                >Featured Image Alt(optional)</label
              >
              <input
                type="text"
                name="featured_image_alt"
                class="form-control form-control-sm"
                v-model="form.featured_image_alt"
              />
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="form-group img-container">
              <label for="thumbnail" class="form-label"
                >Click here to upload image</label
              >
              <div class="img-wrapper">
                <img :src="form.thumbnail" class="img-fluid" />
                <a
                  href="javascript:void(0)"
                  @click.prevent="imgDeleteHandler(null, 'thumbnail')"
                  class="text-danger d-block img-remove"
                  v-if="form.thumbnail"
                >
                  <i class="fas fa-times"></i>
                </a>
                <input
                  type="file"
                  class="form-control"
                  id="thumbnail"
                  @change="handleThumbnailChange"
                  hidden
                />
              </div>
            </div>
            <div class="form-group">
              <label for="thumbnail_title" class="form-label"
                >Thumbnail Title(optional)</label
              >
              <input
                type="text"
                name="thumbnail_title"
                class="form-control form-control-sm"
                v-model="form.thumbnail_title"
              />
            </div>
            <div class="form-group">
              <label for="thumbnail_alt" class="form-label"
                >Thumbnail Alt(optional)</label
              >
              <input
                type="text"
                name="thumbnail_alt"
                class="form-control form-control-sm"
                v-model="form.thumbnail_alt"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</template>
<script>
import axios from "axios";
import { ref, reactive } from "vue";
import { QuillEditor } from "@vueup/vue-quill";

export default {
  components: { QuillEditor },
  setup() {
    const form = reactive({
      title: "",
      slug: "",
      description:
        "<img src='data:image/jpeg;base64,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' />",
      category_id: "",
      featured_image: "",
      featured_image_title: "",
      featured_image_alt: "",
      thumbnail: "",
      thumbnail_title: "",
      thumbnail_alt: "",
    });
    const validation = reactive({
      message: "",
      errors: [],
    });

    const handleFormSubmit = () => {
      console.log("form", form);
      //   axios
      //     .post("/admin/blogs/create", form)
      //     .then((res) => {})
      //     .catch((err) => {});
    };

    const handleFeaturedImageChange = (e) => {
      if (e.target.files.length == 0) return;

      const file = e.target.files[0];

      form.featured_image_title = file.name;

      convertImageIntoDataUrl(file, (data) => {
        form.featured_image = data.target.result;
      });
    };

    const handleThumbnailChange = (e) => {
      if (e.target.files.length == 0) return;

      const file = e.target.files[0];

      form.thumbnail_title = file.name;

      convertImageIntoDataUrl(file, (data) => {
        form.thumbnail = data.target.result;
      });
    };

    const convertImageIntoDataUrl = (file, success) => {
      const file_reader = new FileReader();
      file_reader.onload = (e) => {
        success(e);
      };
      file_reader.readAsDataURL(file);
    };

    const imgDeleteHandler = (index, type) => {
      if (type == "featured_image") {
        form.featured_image = "";
      } else if (type == "thumbnail") {
        form.thumbnail = "";
      }
    };

    return {
      form,
      handleFormSubmit,
      handleFeaturedImageChange,
      imgDeleteHandler,
      handleThumbnailChange,
    };
  },
};
</script>
<style>
.ql-container {
  height: 500px !important;
}

.img-container {
  border: 1px dashed;
  padding: 20px;
  text-align: center;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.img-container label {
  cursor: pointer;
  transition: 0.3s;
}

.img-container label:hover {
  color: #30419b;
}

.img-wrapper {
  position: relative;
  padding: 5px;
}

.img-remove {
  position: absolute;
  top: 0;
  right: 0;
  margin: 5px 15px;
}
</style>
