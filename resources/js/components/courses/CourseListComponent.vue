<template>
  <div>
    <div class="table-response">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Course Code</th>
            <th>Title</th>
            <th>Industry</th>
          </tr>
        </thead>

        <tbody v-if="state.loading">
          <tr>
            <td colspan="12" class="text-center">Loading...</td>
          </tr>
        </tbody>
        <tbody v-else-if="state.courses.length == 0">
          <tr>
            <td colspan="12" class="text-center">No courses found</td>
          </tr>
        </tbody>
        <tbody v-else>
          <tr v-for="(course, index) in state.courses" :key="index">
            <td>
              {{
                index +
                1 +
                (state.pagination_meta.current_page - 1) *
                  state.paginate_options.per_page
              }}
            </td>
            <td>
              {{ course.code }}
            </td>
            <td>
              {{ course.title }}
              <div>
                <a :href="getEditLink(course)" class="btn-link text-secondary"
                  >Edit</a
                >
                <a
                  href="#"
                  class="btn-link text-secondary ml-2"
                  @click.prevent="attemptDelete(course)"
                  >Delete</a
                >
              </div>
            </td>
            <td>
              {{ course.industry ? course.industry.title : "N/A" }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li
          class="page-item"
          v-for="(item, index) in state.pagination_meta.links"
          :key="index"
        >
          <a
            class="page-link"
            :href="item.url"
            :class="{ active: item.active }"
            v-html="item.label"
            @click.prevent="getPage(item.url)"
          ></a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import { reactive, onMounted } from "vue";
import useCourse from "../../composables/useCourse";

export default {
  setup() {
    const state = reactive({
      courses: [],
      loading: false,
      paginate_options: {
        search: "",
        per_page: 10,
      },
      pagination_meta: {
        links: [],
        current_page: 1,
      },
    });

    const {
      get: getCourses,
      edit: editCourse,
      destroy: deleteCourse,
    } = useCourse();

    onMounted(() => {
      fetchCourses();
    });

    const fetchCourses = (link = null) => {
      state.loading = true;

      getCourses(
        state.paginate_options.search,
        state.paginate_options.per_page,
        link
      )
        .then((res) => {
          state.courses = res.data.data;
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

    const getPage = (link) => {
      fetchCourses(link);
    };

    const getEditLink = (course) => {
      return "/admin/course/edit/" + course.id;
    };

    const attemptDelete = (course) => {
      if (confirm("Are you sure you want to delete this course?")) {
        deleteCourse(course.id)
          .then(() => {
            fetchCourses();
          })
          .catch((err) => {
            alert(err.response.data.message);
          });
      }
    };

    return {
      state,
      getPage,
      getEditLink,
      attemptDelete,
    };
  },
};
</script>
