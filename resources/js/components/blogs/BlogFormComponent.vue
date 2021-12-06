<template>
  <form @submit.prevent="handleFormSubmit()">
    <div class="row">
      <div class="col-md-8">
        <div
          class="alert alert-success"
          v-if="success_message"
          v-html="success_message"
        ></div>
        <!-- there is some problems, need to fix later -->
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
            @keyup="generateSlug(form.formData.title)"
            v-model="form.formData.title"
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
              v-model="form.formData.slug"
            />
          </div>
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <quill-editor
            v-model:value="form.formData.description"
            :options="options"
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
            v-model="form.formData.meta_keys"
          />
        </div>

        <div class="form-group">
          <label for="meta_tags">Meta Tags(optional)</label>
          <input
            type="text"
            class="form-control"
            id="meta_tags"
            v-model="form.formData.meta_tags"
          />
        </div>

        <div class="form-group">
          <label for="meta_description">Meta Description(optional)</label>
          <input
            type="text"
            class="form-control"
            id="meta_description"
            v-model="form.formData.meta_description"
          />
        </div>

        <div class="form-group d-flex justify-content-end">
          <button
            class="btn btn-default btn-sm btn-tone mr-2"
            type="button"
            @click="draftAndSave()"
            :disabled="form.isSaving || form.isDraft"
          >
            <i class="fas fa-cloud mr-1" v-if="!form.isDraft"></i>
            <i class="fas fa-circle-notch fa-spin mr-1" v-else></i>
            {{ action_label }} and Draft
          </button>
          <button
            class="btn btn-primary btn-sm btn-tone"
            type="button"
            @click="save()"
            :disabled="form.isSaving || form.isDraft"
          >
            <i class="fas fa-plus mr-1" v-if="!form.isSaving"></i>
            <i class="fas fa-circle-notch fa-spin mr-1" v-else></i>
            {{ action_label }} and Publish
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
                v-model="form.formData.category_id"
              >
                <option value="0" selected>Uncategorized</option>
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
                <img :src="form.formData.featured_image" class="img-fluid" />
                <a
                  href="javascript:void(0)"
                  @click.prevent="imgDeleteHandler(null, 'featured_image')"
                  class="text-danger d-block img-remove"
                  v-if="form.formData.featured_image"
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
                v-model="form.formData.featured_image_title"
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
                v-model="form.formData.featured_image_alt"
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
                <img :src="form.formData.thumbnail" class="img-fluid" />
                <a
                  href="javascript:void(0)"
                  @click.prevent="imgDeleteHandler(null, 'thumbnail')"
                  class="text-danger d-block img-remove"
                  v-if="form.formData.thumbnail"
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
                v-model="form.formData.thumbnail_title"
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
                v-model="form.formData.thumbnail_alt"
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
  setup(_, context) {
    const options = reactive({
      placeholder: "Create something awesome ...",
      modules: {
        toolbar: [
          [{ header: [1, 2, 3, 4, 5, 6, false] }],
          [{ size: ["small", false, "large", "huge"] }],
          ["bold", "italic", "underline", "strike"],
          [{ align: [] }],
          [{ list: "ordered" }, { list: "bullet" }],
          [{ indent: "-1" }, { indent: "+1" }],
          [{ color: [] }, { background: [] }],
          ["link", "image"],
        ],
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
    });
    const form = reactive({
      formData: {
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
      },
      isSaving: false,
      isDraft: false,
    });

    const action_label = ref("Save");

    const useAsSave = () => {
      action_label.value = "Save";
    };
    const useAsUpdate = () => {
      action_label.value = "Update";
    };

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
      validation.errors = "";
      context.emit("formSubmit", {
        form: form.formData,
      });
    };

    const setSuccessResponse = (data, resetForm = true) => {
      success_message.value = data.message;
      if (resetForm) {
        formReset();
      }
      forceScrollTop();
    };
    const setErrorResponse = (error) => {
      validation.errors = error.response.data.errors;
      validation.message = error.response.data.message;
      console.log(validation);
      forceScrollTop();
    };
    const responseCompleted = () => {
      form.isSaving = false;
      form.isDraft = false;
    };

    const formReset = () => {
      form.formData.title = "";
      form.formData.description = "";
      form.formData.slug = "";
      form.formData.category_id = "";
      form.formData.featured_image = "";
      form.formData.featured_image_title = "";
      form.formData.featured_image_alt = "";
      form.formData.thumbnail = "";
      form.formData.thumbnail_title = "";
      form.formData.thumbnail_alt = "";
      form.formData.meta_keys = "";
      form.formData.meta_tags = "";
      form.formData.meta_description = "";
      form.formData.isPublished = 1;
      validation.message = "";
      validation.errors = [];
    };

    const setFormData = (data) => {
      form.formData.title = data.title;
      form.formData.description = data.description;
      form.formData.slug = data.slug;
      form.formData.category_id = data.category_id ?? 0;
      form.formData.featured_image = data.image;
      form.formData.featured_image_title = data.image_alt;
      form.formData.featured_image_alt = data.featured_image_alt;
      form.formData.thumbnail = data.thumbnail;
      form.formData.thumbnail_title = data.thumbnail_title;
      form.formData.thumbnail_alt = data.thumbnail_alt;
      form.formData.meta_keys = data.meta_keys;
      form.formData.meta_tags = data.meta_tags;
      form.formData.meta_description = data.meta_description;
      form.formData.isPublished = data.isPublished;
    };

    const forceScrollTop = () => {
      window.scroll({
        top: 0,
        behavior: "smooth",
      });
    };
    const save = () => {
      form.formData.isPublished = 1;
      form.isSaving = true;
      handleFormSubmit();
    };
    const draftAndSave = () => {
      form.formData.isPublished = 0;
      form.isDraft = true;
      handleFormSubmit();
    };
    const handleFeaturedImageChange = (e) => {
      if (e.target.files.length == 0) return;
      const file = e.target.files[0];
      form.formData.featured_image_title = file.name;
      convertImageIntoDataUrl(file, (data) => {
        form.formData.featured_image = data.target.result;
      });
    };
    const handleThumbnailChange = (e) => {
      if (e.target.files.length == 0) return;
      const file = e.target.files[0];
      form.formData.thumbnail_title = file.name;
      convertImageIntoDataUrl(file, (data) => {
        form.formData.thumbnail = data.target.result;
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
        form.formData.featured_image = "";
      } else if (type == "thumbnail") {
        form.formData.thumbnail = "";
      }
    };
    const generateSlug = (title) => {
      form.formData.slug = Slug.generate(title);
    };
    return {
      options,
      form,
      categories,
      action_label,
      useAsSave,
      useAsUpdate,
      handleFormSubmit,
      save,
      draftAndSave,
      validation,
      success_message,
      handleFeaturedImageChange,
      imgDeleteHandler,
      handleThumbnailChange,
      generateSlug,
      setSuccessResponse,
      setErrorResponse,
      responseCompleted,
      setFormData,
    };
  },
};
</script>
