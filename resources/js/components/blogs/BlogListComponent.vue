<template>
  <div class="row">
    <div class="col-12" v-if="isLoading">
      <div class="d-flex justify-content-center">Loading...</div>
    </div>
    <div class="col-12 table-responsive" v-else>
      <div class="row">
        <div class="col-4">
          <select class="form-control" v-model="perPage">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
          </select>
        </div>
        <div class="col-6 offset-2">
          <input
            type="text"
            class="form-control"
            v-model="search"
            placeholder="Search..."
          />
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th width="80px">Thumbnail</th>
                <th>Title</th>
                <th>Category</th>
                <th>Keywords</th>
                <th>Meta Description</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr v-for="(blog, index) in blogs" :key="index">
                <td>#</td>
                <td>
                  <img
                    class="blog-thumbnail"
                    :src="blog.thumbnail"
                    :alt="blog.title"
                  />
                </td>
                <td>
                  {{ blog.title }}
                  <div class="py-3">
                    <a href="javascript:void(0)" class=""> Edit </a>
                    <a href="javascript:void(0)" class="mx-2"> Delete </a>
                  </div>
                </td>
                <td>
                  {{ blog.category.title }}
                </td>
                <td>
                  {{ blog.meta_keys }}
                </td>
                <td>
                  {{ blog.meta_description }}
                </td>
                <td>
                  {{ blog.isPublished ? "Published" : "Unpublished" }}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <nav aria-label="Blogs pagination">
            <ul class="pagination justify-content-center">
              <li
                class="page-item"
                v-for="(page, index) in paginationLinks"
                :key="index"
                :class="page.url == null ? 'disabled' : ''"
              >
                <a
                  class="page-link"
                  href="javascript:void(0)"
                  tabindex="-1"
                  @click="getLink(page.url)"
                  v-html="page.label"
                ></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { ref, onMounted, watch } from "vue";
import _ from "lodash";

export default {
  setup() {
    const isLoading = ref(false);
    const blogs = ref([]);
    const perPage = ref(5);
    const paginationLinks = ref([]);
    const action_url = "/admin/blogs/list";
    const search = ref("");

    onMounted(() => {
      getBlogs(action_url);
    });

    watch(perPage, (newVal, oldVal) => {
      getBlogs(action_url);
    });

    const searchByTitle = _.debounce((title) => {
      getBlogs(action_url);
    }, 500);

    watch(search, (newVal, oldVal) => {
      searchByTitle(search.value);
    });

    const getBlogs = (actionUrl) => {
      isLoading.value = true;
      axios
        .get(actionUrl, {
          params: {
            items: perPage.value,
            search: search.value,
          },
        })
        .then((res) => {
          blogs.value = res.data.data;
          paginationLinks.value = res.data.meta.links;
        })
        .catch((err) => {
          console.err(err);
        })
        .finally(() => {
          isLoading.value = false;
        });
    };

    const getLink = (url, index) => {
      getBlogs(url);
    };

    return {
      isLoading,
      blogs,
      paginationLinks,
      getLink,
      perPage,
      search,
    };
  },
};
</script>

<style scoped>
.blog-thumbnail {
  width: 60px;
  height: auto;
}
</style>
