<template>
  <div>
    <form @submit.prevent="handleFormSubmit">
      <!-- <div class="form-group">
        <div class="alert alert-danger" v-if="validation.message">
          {{ validation.message }}
        </div>
      </div> -->
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              placeholder="First name"
              v-model="state.form.first_name"
            />
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
            <input
              type="text"
              class="form-control"
              placeholder="Last name"
              v-model="state.form.last_name"
            />
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              placeholder="Phone"
              v-model="state.form.phone"
            />
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
            <input
              type="email"
              class="form-control"
              placeholder="Email"
              v-model="state.form.email"
            />
          </div>
        </div>
      </div>

      <div class="form-group">
        <input
          type="text"
          class="form-control"
          placeholder="RTO Name"
          v-model="state.form.rto_name"
        />
      </div>

      {{ count }}

      <button type="submit">
        <!-- <i class="fas fa-circle-notch fa-spin mr-2" v-if="state.isSubmit"></i> -->
        Submit
      </button>
    </form>
  </div>
</template>

<script>
import { reactive, ref } from "vue";

export default {
  setup() {
    const state = reactive({
      test: 0,
      form: {
        first_name: "",
        last_name: "",
        phone: "",
        email: "",
        rto_name: "",
      },
      validation: {
        errors: {},
        message: "",
      },
    });

    const submitting = ref(false);
    const count = ref(0);

    setInterval(() => {
      submitting.value = !submitting.value;
      count.value = count.value + 1;
      console.log("updating..", count.value);
    }, 700);

    const handleFormSubmit = () => {
      state.form.first_name = "Hello";
      submitting.value = true;
      state.form.last_name = "World";
    };

    return {
      state,
      submitting,
      count,
      handleFormSubmit,
    };
  },
};
</script>
