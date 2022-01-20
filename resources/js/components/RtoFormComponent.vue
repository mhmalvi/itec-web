<template>
  <div>
    <form @submit.prevent="handleFormSubmit">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <input
              type="text"
              class="form-control"
              placeholder="First name"
              v-model="state.form.first_name"
            />
            <small
              class="text-danger"
              v-if="
                state.validation.errors && state.validation.errors.first_name
              "
            >
              {{ state.validation.errors.first_name[0] }}
            </small>
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
            <input
              type="text"
              class="form-control"
              placeholder="Last name"
              v-model="state.form.last_name"
            />
            <small
              class="text-danger"
              v-if="
                state.validation.errors && state.validation.errors.last_name
              "
            >
              {{ state.validation.errors.last_name[0] }}
            </small>
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
            <small
              class="text-danger"
              v-if="state.validation.errors && state.validation.errors.phone"
            >
              {{ state.validation.errors.phone[0] }}
            </small>
          </div>
          <div class="col-md-6 mt-md-0 mt-3">
            <input
              type="email"
              class="form-control"
              placeholder="Email"
              v-model="state.form.email"
            />
            <small
              class="text-danger"
              v-if="state.validation.errors && state.validation.errors.email"
            >
              {{ state.validation.errors.email[0] }}
            </small>
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
        <small
          class="text-danger"
          v-if="state.validation.errors && state.validation.errors.rto_name"
        >
          {{ state.validation.errors.rto_name[0] }}
        </small>
      </div>

      <button type="submit">
        <i class="fas fa-circle-notch fa-spin mr-2" v-show="!isSubmit"></i>
        Submit
      </button>
    </form>
  </div>
</template>

<script>
import { reactive, ref } from "vue";
import axios from "axios";

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

    const isSubmit = ref(true);

    const handleFormSubmit = () => {
      isSubmit.value = false;

      axios
        .post("join-as-rto-partner", state.form)
        .then((res) => {
          location.href = "/";
        })
        .catch((error) => {
          console.error(error.response.data.errors);
        })
        .finally(() => {
          isSubmit.value = true;
        });
    };

    return {
      state,
      handleFormSubmit,
      isSubmit,
    };
  },
};
</script>
