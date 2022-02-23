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
            <td colspan="12" class="text-center">Loading</td>
          </tr>
        </tbody>
        <tbody v-else-if="state.industries.length == 0">
          <tr>
            <td colspan="12" class="text-center">No industry here</td>
          </tr>
        </tbody>
        <tbody v-else>
          <tr v-for="(industry, index) in state.industries" :key="index">
            <td>
              {{ index + 1 }}
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
import { reactive, onMounted } from "vue";
import useIndustry from "../../composables/useIndustry";

export default {
  setup() {
    const state = reactive({
      industries: [],
      loading: false,
      paginate_option: {
        per_page: 10,
        search: "",
      },
      pagination_meta: {
        links: [],
        current_page: 0,
      },
    });
    const { get: getIndustries } = useIndustry();

    onMounted(() => {
      fetchIndustries();
    });

    const fetchIndustries = (link = null) => {
      state.loading = true;

      getIndustries(
        state.paginate_option.search,
        state.paginate_option.per_page,
        link
      )
        .then((res) => {
          state.industries = res.data.data;

          state.pagination_meta.links = res.data.meta.links;
          state.pagination_meta.current_page = res.data.meta.current_page;
        })
        .catch((err) => {
          alert(err.response.data.message);
        })
        .finally(() => {
          state.loading = false;
        });
    };

    return {
      state,
    };
  },
};
</script>
