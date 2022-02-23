<template>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <FormComponent ref="form_component" @formSubmit="handleCreate" />
    </div>
  </div>
</template>

<script>
import FormComponent from "./IndustryFormComponent.vue";
import { ref } from "vue";
import useIndustry from "../../composables/useIndustry";

export default {
  components: {
    FormComponent,
  },
  setup() {
    const form_component = ref(0);

    const { create: createIndustry } = useIndustry();

    const handleCreate = (data) => {
      createIndustry(data)
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
      handleCreate,
    };
  },
};
</script>
