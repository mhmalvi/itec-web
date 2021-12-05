<template>
  <form @submit.prevent="handleFormSubmit()">
    <div class="row">
      <div class="col-md-8">
        <div
          class="alert alert-success"
          v-if="success_message"
          v-html="success_message"
        ></div>
        <div
          class="alert alert-danger"
          v-if="validation.message && validation.errors.length == 0"
        >
          {{ validation.message }}
        </div>
        <div class="form-group">
          <label for="title">
            Blog Title <span class="text-danger">*</span></label
          >
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Blog title is required ..."
            @keyup="generateSlug(form.title)"
            v-model="form.title"
          />
          <p class="text-danger" v-if="validation.errors.title">
            {{ validation.errors.title[0] }}
          </p>
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
              id="url-slug"
              aria-describedby="slug-url"
              placeholder="Slug is a friendly version of your url ..."
              v-model="form.slug"
            />
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <quill-editor
            v-model:value="state.content"
            :options="state.editorOption"
            @change="onEditorChange($event)"
          />
        </div>

        <!-- meta keywords
        meta tags
        meta descriptions
        -->

        <div class="form-group">
          <label for="meta_keys">Meta Keywords(optional)</label>
          <input
            type="text"
            class="form-control"
            id="meta_keys"
            v-model="form.meta_keys"
          />
        </div>

        <div class="form-group">
          <label for="meta_tags">Meta Tags(optional)</label>
          <input
            type="text"
            class="form-control"
            id="meta_tags"
            v-model="form.meta_tags"
          />
        </div>

        <div class="form-group">
          <label for="meta_description">Meta Description(optional)</label>
          <input
            type="text"
            class="form-control"
            id="meta_description"
            v-model="form.meta_description"
          />
        </div>

        <div class="form-group d-flex justify-content-end">
          <button
            class="btn btn-default mr-2"
            type="button"
            @click="draftAndSave()"
            :disabled="isSaving || isDrafting"
          >
            <i class="fas fa-cloud mr-1" v-if="!isDrafting"></i>
            <i class="fas fa-circle-notch fa-spin mr-1" v-else></i>
            Draft
          </button>
          <button
            class="btn btn-primary"
            type="button"
            @click="save()"
            :disabled="isSaving || isDrafting"
          >
            <i class="fas fa-plus mr-1" v-if="!isSaving"></i>
            <i class="fas fa-circle-notch fa-spin mr-1" v-else></i>
            Save
          </button>
          <button hidden>submit</button>
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
                <option
                  :value="category.id"
                  v-for="(category, index) in categories"
                  :key="index"
                >
                  {{ category.title }}
                </option>
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
import { quillEditor, Quill } from "vue3-quill";
import ImageUploader from "quill-image-uploader";
import { reactive, ref, onMounted } from "vue";
import axios from "axios";
import Slug from "../../modules/Slug";
import BlogCategory from "../../modules/BlogCategory";

Quill.register("modules/imageUploader", ImageUploader);
export default {
  components: {
    quillEditor,
  },
  setup() {
    const state = reactive({
      content: "",
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

    const form = reactive({
      title: "",
      description: "",
      slug: "",
      category_id: "",
      featured_image: "",
      featured_image_title: "",
      featured_image_alt: "",
      thumbnail: "",
      thumbnail_title: "",
      thumbnail_alt: "",
      meta_keys: "",
      meta_tags: "",
      meta_description: "",
      isPublished: 1,
    });

    const isSaving = ref(false);
    const isDrafting = ref(false);

    const validation = reactive({
      errors: [],
      message: "",
    });

    const success_message = ref("");

    const categories = ref([]);

    onMounted(() => {
      getCategories();
    });

    const getCategories = () => {
      BlogCategory.getRaw()
        .then((data) => {
          categories.value = data;
        })
        .catch((err) => {
          console.error(err);
        });
    };

    const handleFormSubmit = () => {
      form.description = state._content;
      validation.errors = "";
      axios
        .post("/admin/blogs/create", form)
        .then((res) => {
          success_message.value = res.data.message;
          formReset();

          forceScrollTop();
        })
        .catch((err) => {
          validation.errors = err.response.data.errors;
          validation.message = err.response.data.message;

          forceScrollTop();
        })
        .finally(() => {
          isSaving.value = false;
          isDrafting.value = false;
        });
    };

    const formReset = () => {
      form.title = "";
      form.description = "";
      form.slug = "";
      form.category_id = "";
      form.featured_image = "";
      form.featured_image_title = "";
      form.featured_image_alt = "";
      form.thumbnail = "";
      form.thumbnail_title = "";
      form.thumbnail_alt = "";
      form.meta_keys = "";
      form.meta_tags = "";
      form.meta_description = "";
      form.isPublished = 1;

      state.content = "";

      validation.message = "";
      validation.errors = [];
    };

    const forceScrollTop = () => {
      window.scroll({
        top: 0,
        behavior: "smooth",
      });
    };

    const save = () => {
      form.isPublished = 1;
      isSaving.value = true;
      handleFormSubmit();
    };

    const draftAndSave = () => {
      form.isPublished = 0;
      isDrafting.value = true;
      handleFormSubmit();
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
    };

    const generateSlug = (title) => {
      form.slug = Slug.generate(title);
    };

    return {
      form,
      categories,
      handleFormSubmit,
      save,
      isDrafting,
      isSaving,
      draftAndSave,
      validation,
      success_message,
      handleFeaturedImageChange,
      imgDeleteHandler,
      handleThumbnailChange,
      state,
      onEditorBlur,
      onEditorFocus,
      onEditorReady,
      onEditorChange,
      generateSlug,
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
