<template>
  <div class="row container emp-profile mx-auto">
    <div class="col-md-4">
      <h5 class="pb-3">Change Password</h5>
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
                <label for="old_password">Old Password</label>
                <input
                  type="password"
                  id="old_password"
                  v-model="formdata.old_password"
                  class="form-control form-control-sm"
                />
                <transition name="fade">
                  <div v-if="message.errors.old_password">
                    <small
                      class="text-danger"
                      v-for="(item, index) in message.errors.old_password"
                      :key="index"
                    >
                      {{ item }}
                    </small>
                  </div>
                </transition>
              </div>
              <div class="col-12 form-group">
                <label for="new_password">New Password</label>
                <input
                  type="password"
                  id="new_password"
                  v-model="formdata.password"
                  class="form-control form-control-sm"
                />
                <transition name="fade">
                  <div v-if="message.errors.password">
                    <small
                      class="text-danger"
                      v-for="(item, index) in message.errors.password"
                      :key="index"
                    >
                      {{ item }}
                    </small>
                  </div>
                </transition>
              </div>
              <div class="col-12 form-group">
                <label for="confirm_password">Confirm Password</label>
                <input
                  type="password"
                  id="confirm_password"
                  v-model="formdata.password_confirmation"
                  class="form-control form-control-sm"
                />
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
  setup(props) {
    const formdata = reactive({
      old_password: "",
      password: "",
      password_confirmation: "",
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
        .post("admin/settings/change-password", formdata)
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