<template>
  <div class="row">
    <div class="col-md-12">
      <form @submit.prevent="handleFormSubmit">
        <div class="row d-flex justify-content-center text-left">
          <div class="col-md-5">
            <div class="form-group">
              <label>What industry is your experience in?</label>
              <select class="form-control" v-model="state.form.industry">
                <option value="">Select industry</option>
                <option
                  v-for="(industry, index) in state.industries"
                  :key="index"
                  :value="industry.title"
                >
                  {{ industry.title }}
                </option>
              </select>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group">
              <label>What qualification are you looking for?</label>
              <span v-show="state.qualifications_loading" class="float-right">
                <i class="fas fa-circle-notch fa-spin"></i>
              </span>
              <select
                class="form-control"
                :disabled="state.qualifications.length == 0"
                v-model="state.form.qualification"
              >
                <option value="">Select qualification</option>

                <option
                  v-for="(qualification, index) in state.qualifications"
                  :key="index"
                  :value="qualification.Course"
                >
                  {{ qualification.Course }}
                </option>
              </select>
            </div>
          </div>

          <div class="col-md-2 d-flex justify-content-start align-items-center">
            <button
              class="find-course-button mt-2"
              type="submit"
              :disabled="!state.form.course_code"
            >
              Learn More <i class="ml-2 fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row d-flex justify-content-center"></div>
</template>

<script>
import { reactive, onMounted, watch } from "vue";
import axios from "axios";

export default {
  setup() {
    const state = reactive({
      form: {
        industry: "",
        qualification: "",
        course_code: "",
      },
      industries: [],
      qualifications: [],
      course_codes: [],
      qualifications_loading: false,
    });

    onMounted(() => {
      getIndustries();
    });

    watch(
      () => state.form.industry,
      (val) => {
        if (val) getQualifications(val);
      }
    );

    watch(
      () => state.form.qualification,
      (val) => {
        if (val) {
          let index = -1;
          let i = 0;
          state.qualifications.forEach((q) => {
            if (q.Course == val) {
              index = i;
            }

            ++i;
          });
          if (index > -1) {
            state.form.course_code = state.course_codes[index];
          }
        }
      }
    );

    const getIndustries = () => {
      axios
        .get("/api/course-industry/all")
        .then((res) => {
          state.industries = res.data.data;
        })
        .catch((err) => {
          console.log(err.response);
          alert("Something went wrong");
        });
    };

    const getQualifications = (title) => {
      state.qualifications_loading = true;

      state.form.qualification = "";
      state.form.course_code = "";

      state.qualifications = [];
      state.course_codes = [];

      axios
        .get("/api/get-course-by-industry", {
          params: {
            title,
          },
        })
        .then((res) => {
          state.qualifications = res.data.data;
          state.course_codes = res.data.course_codes;
        })
        .catch((err) => {
          console.log(err.response);
          alert("Something went wrong!");
        })
        .finally(() => {
          state.qualifications_loading = false;
        });
    };

    const handleFormSubmit = () => {
      if (state.form.course_code)
        location.href = `${state.form.course_code}/course`;
    };

    return {
      state,
      getQualifications,
      handleFormSubmit,
    };
  },
};
</script>

<style>
.find-course-button {
  background: #cd4236 !important;
}
</style>
