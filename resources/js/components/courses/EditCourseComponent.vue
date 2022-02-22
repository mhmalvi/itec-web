<template>
  <div>
    <FormComponent
      ref="form_component"
      :industries_data="industries_data"
      :categories_data="categories_data"
      @formSubmit="handleEditCourse"
    />
  </div>
</template>

<script>
import FormComponent from "./CourseFormComponent.vue";
import { ref, onMounted } from "vue";
import useCourse from "../../composables/useCourse";

export default {
  components: {
    FormComponent,
  },
  props: ["course_data", "categories_data", "industries_data"],
  setup({ course_data, categories_data, industries_data }) {
    const form_component = ref(0);
    const { update: editCourse } = useCourse();

    const course = JSON.parse(course_data);

    onMounted(() => {
      form_component.value.setFormData(course);
    });

    const handleEditCourse = (data) => {
      editCourse(course.id, data)
        .then((res) => {
          form_component.value.success(res, false);
          alert(res.data.message);
        })
        .catch((err) => {
          form_component.value.fail(err);
          if (err.response.status != 422) alert(err.response.data.message);
        })
        .finally(() => {
          form_component.value.completed();
        });
    };

    return {
      form_component,
      categories_data,
      industries_data,
      handleEditCourse,
    };
  },
};
</script>
