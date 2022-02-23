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
              {{
                index +
                1 +
                (state.pagination_meta.current_page - 1) *
                  state.paginate_option.per_page
              }}
            </td>
            <td class="d-flex align-items-center">
              <img
                :src="industry.thumbnail"
                :alt="industry.title"
                class="img-thumbnail"
                width="80"
              />
              <div class="ml-3">
                {{ industry.title }}
                <div>
                  <a :href="getEditLink(industry)" class="btn-link">Edit</a>
                  <a
                    href="#"
                    @click.prevent="attemptDelete(industry)"
                    class="btn-link ml-2"
                    >Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div
      class="row d-flex justify-content-center"
      v-if="
        !state.loading || state.industries == [] || state.industries == null
      "
    >
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li
            class="page-item"
            v-for="(item, index) in state.pagination_meta.links"
            :key="index"
          >
            <a
              class="page-link"
              href="javascript:void(0)"
              :class="{ active: item.active }"
              v-html="item.label"
              @click.prevent="getPage(item.url)"
              :disabled="item.url == null"
            ></a>
          </li>
        </ul>
      </nav>
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
    const { get: getIndustries, destroy: deleteIndustry } = useIndustry();

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

    const getEditLink = (industry) => {
      return "/admin/industries/edit/" + industry.id;
    };

    const attemptDelete = (industry) => {
      if (confirm("Are you sure you want to delete this industry?")) {
        deleteIndustry(industry.id)
          .then((res) => {
            alert(res.data.message);
            fetchIndustries();
          })
          .catch((err) => {
            alert(err.response.data.message);
          });
      }
    };

    const getPage = (link) => {
      if (link) fetchIndustries(link);
    };

    return {
      state,
      getEditLink,
      attemptDelete,
      getPage,
    };
  },
};
</script>
