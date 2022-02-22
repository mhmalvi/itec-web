<template>
  <div>
    <FormComponent
      ref="form_component"
      :categories_data="categories_data"
      :industries_data="industries_data"
      @formSubmit="handleCreateCourse"
    />
  </div>
</template>

<script>
import { ref } from "vue";
import FormComponent from "./CourseFormComponent.vue";
import useCourse from "../../composables/useCourse";

export default {
  components: {
    FormComponent,
  },
  props: ["categories_data", "industries_data"],
  setup({ categories_data, industries_data }) {
    const form_component = ref(0);
    const { create: createCourse } = useCourse();

    const handleCreateCourse = (data) => {
      createCourse(data)
        .then((res) => {
          form_component.value.success(res);
          alert(res.data.message);
        })
        .catch((err) => {
          form_component.value.fail(err);
        })
        .finally(() => {
          form_component.value.completed();
        });
    };

    return {
      form_component,
      categories_data,
      industries_data,
      handleCreateCourse,
    };
  },
};
</script>
