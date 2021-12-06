<template>
  <div class="row container emp-profile mx-auto">
    <div class="col-md-4">
      <h5 class="pb-2">Personal Informations</h5>
      <transition name="fade">
        <div class="alert alert-success" v-if="message.success">
          <div class="d-flex align-items-center justify-content-start">
            <span class="alert-icon">
              <i class="anticon anticon-check-o"></i>
            </span>
            <span>Successfully updated!</span>
          </div>
        </div>
      </transition>
    </div>
    <div class="col-md-8">
      <div class="card rounded">
        <div class="card-body">
          <form @submit.prevent="handleFormSubmit">
            <div class="row">
              <div class="col-12 form-group">
                <label for="username">User Name</label>
                <input
                  type="text"
                  class="form-control form-control-sm"
                  v-model="formdata.username"
                  id="username"
                />
                <transition name="fade">
                  <div v-if="message.errors.username">
                    <small
                      class="text-danger"
                      v-for="(item, index) in message.errors.username"
                      :key="index"
                    >
                      {{ item }}
                    </small>
                  </div>
                </transition>
              </div>
              <div class="col-12 form-group">
                <label for="email">Email Address</label>
                <input
                  type="email"
                  class="form-control form-control-sm"
                  v-model="formdata.email"
                  id="email"
                />
                <transition name="fade">
                  <div v-if="message.errors.email">
                    <small
                      class="text-danger"
                      v-for="(item, index) in message.errors.email"
                      :key="index"
                    >
                      {{ item }}
                    </small>
                  </div>
                </transition>
              </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary btn-tone">
              Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { reactive } from "vue";
import axios from "axios";
export default {
  props: ["username", "email"],
  setup(props) {
    const formdata = reactive({
      username: props.username,
      email: props.email,
    });

    const message = reactive({
      success: false,
      errors: [],
    });

    const handleFormSubmit = () => {
      if (message.errors.length > 0) {
        message.errors = [];
      }
      axios
        .post("admin/settings/profile", formdata)
        .then((res) => {
          message.success = true;
        })
        .catch((err) => {
          message.errors = err.response.data.errors;
        })
        .finally(() => {
          setTimeout(() => {
            message.success = false;
          }, 3000);
        });
    };

    return {
      formdata,
      handleFormSubmit,
      message,
    };
  },
};
</script>
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>