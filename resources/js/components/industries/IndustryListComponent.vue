<template>
  <div>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Industry Name</th>
          </tr>
        </thead>

        <tbody v-if="state.loading">
          <tr>
            <td colspan="12">Loading</td>
          </tr>
        </tbody>
        <tbody v-else-if="state.industries.length == 0">
          <tr>
            <td colspan="12">No industry here</td>
          </tr>
        </tbody>
        <tbody v-else>
          <tr v-for="(industry, index) in state.industries" :key="index">
            <td>
              {{ index }}
            </td>
            <td>
              <div>
                <img :src="industry.thumbnail" :alt="industry.title" />
              </div>
              <div>
                {{ industry.title }}
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { reactive } from "vue";

export default {
  setup() {
    const state = reactive({
      industries: [],
      loading: false,
    });

    return {
      state,
    };
  },
};
</script>
