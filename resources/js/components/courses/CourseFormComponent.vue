<template>
  <div>
    <form @submit.prevent="handleFormSubmit">
      <div class="my-5">
        <div class="ibox">
          <div class="ibox-content p-5">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Course Code</label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  v-model="state.form.course_code"
                />
                <small
                  v-if="
                    state.validation.errors &&
                    state.validation.errors.course_code
                  "
                  class="text-danger"
                >
                  {{ state.validation.errors.course_code[0] }}
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Course Title</label>
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  v-model="state.form.course_title"
                />
                <small
                  v-if="
                    state.validation.errors &&
                    state.validation.errors.course_title
                  "
                  class="text-danger"
                >
                  {{ state.validation.errors.course_title[0] }}
                </small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Course Category</label>
              <div class="col-sm-4">
                <select
                  name="category"
                  class="form-control"
                  v-model="state.form.category"
                >
                  <option value selected disabled>
                    Select or Create Course Category...
                  </option>

                  <option
                    v-for="(category, index) in categories"
                    :key="index"
                    :value="category.id"
                  >
                    {{ category.title }}
                  </option>
                </select>
                <small
                  v-if="
                    state.validation.errors && state.validation.errors.category
                  "
                  class="text-danger"
                >
                  {{ state.validation.errors.category[0] }}
                </small>
              </div>

              <label class="col-sm-2 col-form-label text-right"
                >Course Industry</label
              >
              <div class="col-sm-4">
                <select
                  name="industry"
                  class="form-control"
                  v-model="state.form.industry"
                >
                  <option value selected disabled>
                    Select or Create Course Industry...
                  </option>

                  <option
                    v-for="(industry, index) in industries"
                    :key="index"
                    :value="industry.id"
                  >
                    {{ industry.title }}
                  </option>
                </select>
                <small
                  v-if="
                    state.validation.errors && state.validation.errors.industry
                  "
                  class="text-danger"
                >
                  {{ state.validation.errors.industry[0] }}
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-5">
        <div class="ibox">
          <div class="ibox-content p-5">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Informations</label>
              <div class="col-sm-10">
                <!-- <QuillEditor
                  theme="snow"
                  v-model:value="state.form.description"
                /> -->
                <quill-editor
                  ref="description_editor"
                  v-model:content="state.form.description"
                  contentType="html"
                  :options="options"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-5">
        <div class="ibox">
          <div class="ibox-content p-5">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Meta Tags (max 10)</label>
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  v-model="state.form.meta_tags"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"
                >Meta Keywords (max 5)</label
              >
              <div class="col-sm-9">
                <input
                  type="text"
                  class="form-control"
                  v-model="state.form.meta_keywords"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Meta Description</label>
              <div class="col-sm-10">
                <textarea
                  class="form-control"
                  name="meta_des"
                  rows="5"
                  style="resize: none"
                  v-model="state.form.meta_description"
                ></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-5">
        <div class="ibox">
          <div class="ibox-content p-5">
            <div class="row">
              <div class="col-sm-4">
                <h5>Course Thumbnail (1920 x 1080)</h5>
                <p class="text-secondary">
                  Upload image that should show as thumbnail image to visitors.
                </p>
                <p>Max File Size: 1 mb</p>
              </div>
              <div class="col-sm-8">
                <input
                  type="file"
                  class="form-control"
                  @change="handleThumbnailUpdate"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-5 d-flex justify-content-between">
        <div class="checkbox checkbox-success pl-0">
          <input
            id="checkbox3"
            type="checkbox"
            name="publish"
            v-model="state.form.is_published"
            :checked="state.form.is_published == 1"
          />
          <label for="checkbox3"> Publish Course </label>
        </div>
        <button
          type="submit"
          class="btn btn-primary mr-4"
          :disabled="state.submitting"
        >
          Save
        </button>
      </div>
    </form>
  </div>
</template>

<script>
import { reactive, ref } from "vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import useScroll from "../../composables/useScroll";

export default {
  components: {
    QuillEditor,
  },
  props: ["categories_data", "industries_data"],
  setup({ categories_data, industries_data }, { emit }) {
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
      },
    });
    const description_editor = ref(0);
    const { smoothScrollTop } = useScroll();

    const state = reactive({
      form: {
        course_code: "",
        course_title: "",
        description: "",
        thumbnail: "",
        checklist: "",
        industry: "",
        category: "",
        qualification: "",
        thumbnail: "",
        is_published: false,
      },
      validation: {
        errors: [],
        message: "",
      },
      submitting: false,
    });
    const categories = JSON.parse(categories_data);
    const industries = JSON.parse(industries_data);

    const handleThumbnailUpdate = (e) => {
      const file = e.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = (e) => {
        state.form.thumbnail = e.target.result;
      };
    };

    const handleFormSubmit = () => {
      state.submitting = true;
      state.validation = {
        errors: [],
        message: "",
      };

      emit("formSubmit", state.form);
    };

    const resetForm = () => {
      state.form = {
        course_code: "",
        course_title: "",
        description: "",
        thumbnail: "",
        checklist: "",
        industry: "",
        category: "",
        qualification: "",
        thumbnail: "",
      };

      description_editor.value.setHTML("");
    };

    const success = (res, reset = true) => {
      if (reset) resetForm();
    };

    const fail = (err) => {
      state.validation.errors = err.response.data.errors;
      state.validation.message = err.response.data.message;

      smoothScrollTop();
    };

    const completed = () => {
      state.submitting = false;
    };

    const setFormData = (data) => {
      console.log("setting form data", data);
      state.form.course_code = data.code;
      state.form.course_title = data.title;
      state.form.checklist = data.checklist;
      state.form.industry = data.industry.id;
      state.form.category = data.category.id;
      state.form.is_published = data.isPublished;

      description_editor.value.setHTML(data.description);
    };

    return {
      state,
      categories,
      options,
      industries,
      description_editor,
      handleThumbnailUpdate,
      handleFormSubmit,
      success,
      fail,
      completed,
      setFormData,
    };
  },
};
</script>
