<template>
  <blog-form-component ref="form_component" @formSubmit="handleFormSubmit" />
</template>

<script>
import BlogFormComponent from "./BlogFormComponent.vue";
import BlogCategory from "../../modules/BlogCategory";
import { ref, reactive, onMounted } from "vue";
import Blog from "../../modules/Blog";

export default {
  components: { BlogFormComponent },
  props: ["slug"],
  setup({ slug }) {
    const form_component = ref(0);

    onMounted(() => {
      Blog.get(slug)
        .then((data) => {
          form_component.value.setFormData(data);
        })
        .catch((err) => {});
    });

    const handleFormSubmit = ({ form }) => {
      axios
        .post("/admin/blogs/update/" + slug, {
          _method: "PUT",
          ...form,
        })
        .then((res) => {
          form_component.value.setSuccessResponse(res.data, false);
        })
        .catch((err) => {
          form_component.value.setErrorResponse(err);
        })
        .finally(() => {
          form_component.value.responseCompleted();
        });
    };

    return {
      form_component,
      handleFormSubmit,
    };
  },
};
</script>
