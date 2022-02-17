<template>
  <div class="py-3 text-danger text-center" v-if="messages.errors.message">
    {{ messages.errors.message }}
  </div>
  <div class="py-3 text-success text-center" v-if="messages.success.length > 0">
    <h4>{{ messages.success }}</h4>
  </div>
  <form @submit.prevent="handleFormSubmit" v-else>
    <div class="form-group">
      <input
        type="email"
        id="email"
        v-model="formdata.email"
        class="form-control"
        placeholder="Enter your email address"
      />
      <div class="text-danger" v-if="messages.errors.email">
        <div v-for="(error, index) in messages.errors.email" :key="index">
          <small>{{ error }}</small>
        </div>
      </div>
    </div>
    <div class="btn-popup d-flex justify-content-center">
      <button type="submit" :disabled="messages.isSubmitting">
        <i
          class="fas fa-circle-notch fa-spin mr-2"
          v-if="messages.isSubmitting"
        ></i>
        Submit
      </button>
    </div>
  </form>
</template>
<script>
import { reactive } from "vue";
import axios from "axios";
export default {
  setup() {
    const formdata = reactive({
      email: "",
    });
    const messages = reactive({
      success: "",
      errors: [],
      isSubmitting: false,
    });

    const handleFormSubmit = () => {
      messages.isSubmitting = true;
      axios
        .post("subscribe", formdata)
        .then((res) => {
          messages.success = res.data.success;
          messages.isSubmitting = false;
        })
        .catch((err) => {
          messages.errors = err.response.data.errors;
          messages.isSubmitting = false;
        });
    };

    return {
      formdata,
      messages,
      handleFormSubmit,
    };
  },
};
</script>
<style>
button[type="submit"] {
  height: 45px;
  border: 1px solid #cd4236 !important;
  background: #cd4236 !important;
  color: #fff;
  padding: 0 30px;
  font-weight: 600;
  font-size: 14px;
}
</style>
