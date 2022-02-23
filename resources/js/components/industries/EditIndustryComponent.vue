<template>
  <div class="row justify-content-center">
    <FormComponent ref="form_component" @formSubmit="handleUpdate" />
  </div>
</template>

<script>
import { ref, onMounted } from "vue";
import FormComponent from "./IndustryFormComponent.vue";
import useIndustry from "../../composables/useIndustry";
import useScroll from "../../composables/useScroll";

export default {
  components: {
    FormComponent,
  },
  props: ["industry_data"],
  setup({ industry_data }) {
    const form_component = ref(0);
    const industry = JSON.parse(industry_data);
    const { update: updateIndustry } = useIndustry();
    const { smoothScrollTop } = useScroll();

    onMounted(() => {
      form_component.value.setFormData(industry);
    });

    const handleUpdate = (data) => {
      updateIndustry(industry.id, data)
        .then((res) => {
          form_component.value.success(res, false);
          alert(res.data.message);
          smoothScrollTop();
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
      handleUpdate,
    };
  },
};
</script>
