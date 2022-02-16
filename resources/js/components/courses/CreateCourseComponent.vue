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
                  <!-- @forelse ($categories as $item) -->
                  <!-- <option value="{{ $item->title }}">{{ $item->title }}</option> -->
                  <!-- @empty @endforelse -->

                  <option
                    v-for="(category, index) in categories"
                    :key="index"
                    :value="category.id"
                  >
                    {{ category.title }}
                  </option>
                </select>
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
                  <!-- @forelse ($industries as $item) -->
                  <!-- <option value="{{ $item->title }}">{{ $item->title }}</option> -->
                  <!-- @empty @endforelse -->

                  <option
                    v-for="(industry, index) in industries"
                    :key="index"
                    :value="industry.id"
                  >
                    {{ industry.title }}
                  </option>
                </select>
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
            checked
          />
          <label for="checkbox3"> Publish Course </label>
        </div>
        <button type="submit" class="btn btn-primary mr-4">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
import { reactive } from "vue";
import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
  components: {
    QuillEditor,
  },
  props: ["categories_data", "industries_data"],
  setup({ categories_data, industries_data }) {
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
      axios
        .post("/admin/course/add-new", state.form)
        .then((res) => {
          alert(res.data.message);
          resetForm();
        })
        .catch((err) => {
          alert(err.response.data.message);
        });
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
    };

    return {
      state,
      categories,
      options,
      industries,
      handleThumbnailUpdate,
      handleFormSubmit,
    };
  },
};
</script>
