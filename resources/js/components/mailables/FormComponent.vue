<template>
  <div class="alert alert-success" v-if="success_message.length > 0">
    {{ success_message }}
  </div>
  <div
    class="alert alert-danger"
    v-if="
      validation.message.length > 0 &&
      (!validation.errors || validation.errors.length == 0)
    "
  >
    {{ validation.message }}
  </div>
  <form @submit.prevent="handleFormSubmit">
    <div class="card mb-3 p-3">
      <div class="card-body">
        <div class="form-group">
          <label for="q1">What industry is your experience in?</label>
          <span v-show="data.industries_loading" class="float-right">
            <i class="fas fa-circle-notch fa-spin"></i>
          </span>
          <select
            class="form-control"
            id="q1"
            v-model="formData.q1"
            @change="handleIndustrySelect()"
          >
            <option value="" selected>
              Select the qualification's industry ...
            </option>
            <option
              v-for="(industry, index) in data.industries"
              :key="index"
              :value="industry.title"
            >
              {{ industry.title }}
            </option>
          </select>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q1"
          >
            {{ validation.errors.q1[0] }}
          </small>
        </div>
        <div class="form-group">
          <label for="q2">What qualification are you looking for?</label>
          <span v-show="data.qualifications_loading" class="float-right">
            <i class="fas fa-circle-notch fa-spin"></i>
          </span>
          <select
            class="form-control"
            id="q2"
            v-model="formData.q2"
            :disabled="formData.q1 == '' || data.qualifications.length == 0"
          >
            <option value="" :selected="formData.q2 == ''">
              Select the qualification you looking for ...
            </option>

            <option
              v-for="(qualification, index) in data.qualifications"
              :key="index"
              :value="qualification.Course"
            >
              {{ qualification.Course }}
            </option>
          </select>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q2"
          >
            {{ validation.errors.q2[0] }}
          </small>
        </div>
      </div>
    </div>

    <div class="card mb-3 p-3">
      <div class="card-body">
        <div class="form-group">
          <label for="q3"
            >How many years of relevant work experience do you have?</label
          >
          <div class="row">
            <div class="col-6 col-md-2 mb-1">
              <input
                type="radio"
                name="q3"
                v-model="formData.q3"
                id="one"
                value="1 - 2 years"
                hidden
              />
              <label for="one" class="exp-lbl">
                <div>
                  1 - 2 <br />
                  Years
                </div>
              </label>
            </div>
            <div class="col-6 col-md-2 mb-1">
              <input
                type="radio"
                name="q3"
                v-model="formData.q3"
                id="two"
                value="3 - 4 years"
                hidden
              />
              <label for="two" class="exp-lbl">
                <div>
                  3 - 4 <br />
                  Years
                </div>
              </label>
            </div>
            <div class="col-6 col-md-2 mb-1">
              <input
                type="radio"
                name="q3"
                v-model="formData.q3"
                id="three"
                value="5 - 9 years"
                hidden
              />
              <label for="three" class="exp-lbl">
                <div>
                  5 - 9 <br />
                  Years
                </div>
              </label>
            </div>
            <div class="col-6 col-md-2 mb-1">
              <input
                type="radio"
                name="q3"
                v-model="formData.q3"
                id="four"
                value="10 + years"
                hidden
              />
              <label for="four" class="exp-lbl">
                <div>
                  10 + <br />
                  Years
                </div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q3"
          >
            {{ validation.errors.q3[0] }}
          </small>
        </div>
        <div class="form-group">
          <label for="q4">Where is your work experience?</label>
          <div class="row">
            <div class="col-sm-6 col-md-2">
              <input
                type="radio"
                name="q4"
                v-model="formData.q4"
                id="wlOne"
                value="Australia"
                hidden
              />
              <label for="wlOne" class="exp-lbl">
                <div>Australia</div>
              </label>
            </div>
            <div class="col-sm-6 col-md-2">
              <input
                type="radio"
                name="q4"
                v-model="formData.q4"
                id="wlTwo"
                value="Overseas"
                hidden
              />
              <label for="wlTwo" class="exp-lbl">
                <div>Overseas</div>
              </label>
            </div>
            <div class="col-sm-6 col-md-2">
              <input
                type="radio"
                name="q4"
                v-model="formData.q4"
                id="wlThree"
                value="Other"
                hidden
              />
              <label for="wlThree" class="exp-lbl">
                <div>Other</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q4"
          >
            {{ validation.errors.q4[0] }}
          </small>
        </div>
      </div>
    </div>

    <div class="card mb-3 p-3">
      <div class="card-body">
        <div class="radio">
          <label for="q5">What state do you live in?</label>
          <div class="row">
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="NSW"
                value="NSW"
                v-model="formData.q5"
                hidden
              />
              <label for="NSW" class="exp-lbl">
                <div>New South Wales</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="VIC"
                v-model="formData.q5"
                value="VIC"
              />
              <label for="VIC" class="exp-lbl">
                <div>Victoria</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="QLD"
                v-model="formData.q5"
                value="QLD"
              />
              <label for="QLD" class="exp-lbl">
                <div>Queensland</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="SA"
                v-model="formData.q5"
                value="SA"
              />
              <label for="SA" class="exp-lbl">
                <div>South Australia</div>
              </label>
            </div>
          </div>
          <div class="row pt-sm-5">
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="WA"
                v-model="formData.q5"
                value="WA"
              />
              <label for="WA" class="exp-lbl">
                <div>Western Australia</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="ACT"
                v-model="formData.q5"
                value="ACT"
              />
              <label for="ACT" class="exp-lbl">
                <div>Australian Capital Territory</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="NT"
                v-model="formData.q5"
                value="NT"
              />
              <label for="NT" class="exp-lbl">
                <div>Northern Territory</div>
              </label>
            </div>
            <div class="col-sm-3 col-6">
              <input
                type="radio"
                name="q5"
                id="TAS"
                v-model="formData.q5"
                value="TAS"
              />
              <label for="TAS" class="exp-lbl">
                <div>Tasmania</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q5"
          >
            {{ validation.errors.q5[0] }}
          </small>
        </div>
      </div>
    </div>

    <div class="card mb-3 p-3">
      <div class="card-body">
        <div class="form-group">
          <label for="q7"
            >Can you provide referees who can support your RPL
            Assessment?**</label
          >
          <div class="row">
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q7"
                id="q7y"
                v-model="formData.q6"
                value="yes"
                hidden
              />
              <label for="q7y" class="exp-lbl checklist">
                <div>Yes</div>
              </label>
            </div>
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q7"
                id="q7n"
                value="no"
                v-model="formData.q6"
                hidden
              />
              <label for="q7n" class="exp-lbl checklist">
                <div>No</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q6"
          >
            {{ validation.errors.q6[0] }}
          </small>
        </div>

        <div class="form-group">
          <label for="q8"
            >Do you have any past academic qualification you have obtained in
            Australia ?</label
          >
          <div class="row">
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q8"
                id="q8y"
                value="yes"
                v-model="formData.q7"
                hidden
              />
              <label for="q8y" class="exp-lbl checklist">
                <div>Yes</div>
              </label>
            </div>
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q8"
                id="q8n"
                value="no"
                v-model="formData.q7"
                hidden
              />
              <label for="q8n" class="exp-lbl checklist">
                <div>No</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q7"
          >
            {{ validation.errors.q7[0] }}
          </small>
        </div>

        <div class="form-group">
          <label for="q9"
            >Do you accept that there will be many different type of evidences
            you have to supply for RPL Assessment, will you be able to supply
            the documents when requested?</label
          >
          <div class="row">
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q9"
                id="q9y"
                value="yes"
                v-model="formData.q8"
                hidden
              />
              <label for="q9y" class="exp-lbl checklist">
                <div>Yes</div>
              </label>
            </div>
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q9"
                id="q9n"
                value="no"
                v-model="formData.q8"
                hidden
              />
              <label for="q9n" class="exp-lbl checklist">
                <div>No</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q8"
          >
            {{ validation.errors.q8[0] }}
          </small>
        </div>

        <div class="form-group">
          <label for="q10"
            >During the RPL process, we may request you for some video or photo
            evidences, are you comfortable in supplying such evidences?</label
          >
          <div class="row">
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q10"
                id="q10y"
                value="yes"
                v-model="formData.q9"
                hidden
              />
              <label for="q10y" class="exp-lbl checklist">
                <div>Yes</div>
              </label>
            </div>
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q10"
                id="q10n"
                value="no"
                v-model="formData.q9"
                hidden
              />
              <label for="q10n" class="exp-lbl checklist">
                <div>No</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q9"
          >
            {{ validation.errors.q9[0] }}
          </small>
        </div>

        <div class="form-group">
          <label for="q11"
            >During the RPL process, we may request you for some video or photo
            evidences, are you comfortable in supplying such evidences?</label
          >
          <div class="row">
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q11"
                id="q11y"
                value="yes"
                v-model="formData.q10"
                hidden
              />
              <label for="q11y" class="exp-lbl checklist">
                <div>Yes</div>
              </label>
            </div>
            <div class="col-6 col-md-2">
              <input
                type="radio"
                name="q11"
                id="q11n"
                value="no"
                v-model="formData.q10"
                hidden
              />
              <label for="q11n" class="exp-lbl checklist">
                <div>No</div>
              </label>
            </div>
          </div>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.q10"
          >
            {{ validation.errors.q10[0] }}
          </small>
        </div>
      </div>
    </div>

    <div class="card mb-3 p-3">
      <div class="card-body">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            class="form-control"
            placeholder="Please enter your full name"
            v-model="formData.name"
          />
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.name"
          >
            {{ validation.errors.name[0] }}
          </small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            class="form-control"
            v-model="formData.email"
            placeholder="example@email.com"
          />
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.email"
          >
            {{ validation.errors.email[0] }}
          </small>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input
            type="text"
            id="phone"
            class="form-control"
            v-model="formData.phone"
            placeholder="Enter your contact number"
          />
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.phone"
          >
            {{ validation.errors.phone[0] }}
          </small>
        </div>
        <div class="form-group">
          <label for="query">Additional Query</label>
          <textarea
            name="query"
            rows="5"
            placeholder="Do you have any other query?"
            class="form-control"
            v-model="formData.remarks"
          ></textarea>
          <small
            class="text-danger"
            v-if="validation.errors && validation.errors.remarks"
          >
            {{ validation.errors.remarks[0] }}
          </small>
        </div>

        <button type="submit" :disabled="isSubmitting">
          <i class="fas fa-circle-notch fa-spin mr-2" v-if="isSubmitting"></i>
          Submit
        </button>

        <button class="ml-2" type="button" @click="returnToHome">
          Return To Home
        </button>
      </div>
    </div>
  </form>
</template>
<script>
import axios from "axios";
import { reactive, ref, onMounted } from "vue";
export default {
  setup(props) {
    const formData = reactive({
      q1: "",
      q2: "",
      q3: "",
      q4: "",
      q5: "",
      q6: "",
      q7: "",
      q8: "",
      q9: "",
      q10: "",
      name: "",
      email: "",
      phone: "",
      remarks: "",
    });

    const validation = reactive({
      errors: [],
      message: "",
    });

    const success_message = ref("");

    const isSubmitting = ref(false);

    onMounted(() => {
      getIndustries();
    });

    const data = reactive({
      industries: [],
      qualifications: [],
      industries_loading: false,
      qualifications_loading: false,
    });

    const handleFormSubmit = () => {
      isSubmitting.value = true;
      validation.errors = [];
      validation.message = "";

      axios
        .post("check-your-rpl-eligibility", formData)
        .then((res) => {
          success_message.value = res.data.success;
          formReset();
        })
        .catch((err) => {
          validation.errors = err.response.data.errors;
          validation.message = err.response.data.message;
        })
        .finally(() => {
          isSubmitting.value = false;
          forceScrollToTop();
        });
    };
    const forceScrollToTop = () => {
      scrollTo({
        top: 0,
        behavior: "smooth",
      });
    };
    const formReset = () => {
      Object.keys(formData).forEach((key) => {
        formData[key] = "";
      });
    };

    const getIndustries = () => {
      data.industries_loading = true;
      axios
        .get("/api/course-industry/all")
        .then((res) => {
          data.industries = res.data.data;
        })
        .catch((err) => {
          console.error(err.response.data);
        })
        .finally(() => {
          data.industries_loading = false;
        });
    };

    const getCoursesByIndustry = (industry_title) => {
      data.qualifications_loading = true;
      axios
        .get("/api/get-course-by-industry", {
          params: {
            title: industry_title,
          },
        })
        .then((res) => {
          data.qualifications = res.data.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .finally(() => {
          data.qualifications_loading = false;
        });
    };

    const handleIndustrySelect = () => {
      getCoursesByIndustry(formData.q1);
    };

    const returnToHome = () => {
      window.location.href = "/";
    };

    return {
      formData,
      data,
      isSubmitting,
      validation,
      success_message,
      handleFormSubmit,
      handleIndustrySelect,
      returnToHome,
    };
  },
};
</script>
<style scoped>
.form-control {
  font-size: 0.9rem !important;
}

input[type="text"],
input[type="email"] {
  height: 38px !important;
}

#info {
  font-size: 0.8rem !important;
}

button[type="submit"],
button[type="button"] {
  height: 45px;
  border: 1px solid #cd4236 !important;
  background: #cd4236 !important;
  color: #fff;
  padding: 0 30px;
  font-weight: 600;
  font-size: 14px;
}
.checklist {
  width: 100% !important;
  height: 100% !important;
}
</style>
