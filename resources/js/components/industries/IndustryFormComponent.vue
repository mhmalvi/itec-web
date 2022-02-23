<template>
  <form @submit.prevent="handleSubmit">
    <div class="form-group">
      <label for="" class="form-label">Industry title</label>
      <input type="text" class="form-control" v-model="state.form.title" />
      <small
        class="text-danger"
        v-if="state.validation.errors && state.validation.errors.title"
      >
        {{ state.validation.errors.title[0] }}
      </small>
    </div>

    <div class="form-group">
      <label for="" class="form-label">Description</label>
      <textarea
        type="text"
        class="form-control"
        v-model="state.form.description"
        rows="5"
      ></textarea>
      <small
        class="text-danger"
        v-if="state.validation.errors && state.validation.errors.description"
      >
        {{ state.validation.errors.description[0] }}
      </small>
    </div>

    <div class="form-group">
      <label for="" class="form-label">Thumbnail</label>
      <input type="file" class="form-control" @change="handleImageChange" />
    </div>

    <div class="form-group">
      <label for="is_published" class="form-label">
        <input
          type="checkbox"
          id="is_published"
          v-model="state.form.is_published"
        />
        Publish
      </label>
    </div>

    <div class="form-group">
      <button class="btn btn-primary" :disabled="state.submitting">Save</button>
    </div>
  </form>
</template>

<script>
import { reactive, ref } from "vue";
import useScroll from "../../composables/useScroll";

export default {
  setup(_, { emit }) {
    const state = reactive({
      form: {
        id: undefined,
        title: "",
        thumbnail: "",
        description: "",
        is_published: false,
      },
      validation: {
        errors: [],
        message: "",
      },
      submitting: false,
    });
    const { smoothScrollTop } = useScroll();

    const handleSubmit = () => {
      state.submitting = true;
      state.validation = {
        errors: [],
        message: "",
      };

      emit("formSubmit", state.form);
    };

    const handleImageChange = (e) => {
      const file = e.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = (e) => {
        state.form.thumbnail = e.target.result;
      };
    };

    const resetForm = () => {
      state.form = {
        id: undefined,
        title: "",
        thumbnail: "",
        description: "",
        is_published: false,
      };
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
      state.form.id = data.id;
      state.form.title = data.title;
      state.form.description = data.description;
      state.form.is_published = data.is_published == 1 ? true : false;
    };

    return {
      state,
      handleSubmit,
      success,
      fail,
      completed,
      handleImageChange,
      setFormData,
    };
  },
};
</script>
