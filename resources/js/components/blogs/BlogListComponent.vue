<template>
  <div class="row">
    <div class="col-12">
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
        <div class="col-12 table-responsive">
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

            <tbody v-if="isLoading">
              <tr>
                <td colspan="12">
                  <div class="d-flex justify-content-center">Loading...</div>
                </td>
              </tr>
            </tbody>

            <tbody v-else-if="blogs.length == 0">
              <tr>
                <td colspan="12">
                  <div class="d-flex justify-content-center">
                    No blogs found.
                  </div>
                </td>
              </tr>
            </tbody>

            <tbody v-else>
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
                  <a :href="blog.action_url" target="_blank" class="btn-link">
                    {{ blog.title }}
                  </a>
                  <div class="py-3">
                    <a :href="getEditLink(blog)" class="text-secondary">
                      Edit
                    </a>
                    <a
                      href="javascript:void(0)"
                      @click.prevent="promptToDelete(blog)"
                      class="mx-2 text-secondary"
                    >
                      Delete
                    </a>
                  </div>
                </td>
                <td>
                  {{ blog.category }}
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

      <div class="row" v-if="blogs.length != 0 && !isLoading">
        <div class="col-12">
          <nav aria-label="Blogs pagination">
            <ul class="pagination justify-content-center">
              <li
                class="page-item"
                v-for="(page, index) in paginationLinks"
                :key="index"
                :class="{ disabled: page.url == null, active: page.active }"
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
import Blog from "../../modules/Blog";

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
      searchByTitle(newVal);
    });

    const getBlogs = (actionUrl) => {
      isLoading.value = true;
      Blog.getPaginated(actionUrl, perPage.value, search.value)
        .then((data) => {
          blogs.value = data.data;
          paginationLinks.value = data.meta.links;
        })
        .catch((err) => {
          console.err(err);
        })
        .finally(() => {
          isLoading.value = false;
        });
    };

    const promptToDelete = (blog) => {
      if (confirm("Are you sure you want delete?")) {
        Blog.delete(blog.slug)
          .then((res) => {
            getBlogs(action_url);
          })
          .catch((err) => {
            alert(err.response.data.message);
          });
      }
    };

    const getLink = (url, index) => {
      getBlogs(url);
    };

    const getEditLink = (blog) => {
      return "/admin/blogs/edit/" + blog.slug;
    };

    return {
      isLoading,
      blogs,
      paginationLinks,
      getLink,
      perPage,
      search,
      getEditLink,
      promptToDelete,
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
