import { createApp } from "vue";
import axios from "axios";
import CreateBlog from "./components/blogs/CreateBlog.vue";
import BlogListComponent from "./components/blogs/BlogListComponent.vue";
import BasicInformations from "./components/profile/BasicInformations.vue";
import PasswordChange from "./components/profile/PasswordChange.vue";
import EditBlogComponent from "./components/blogs/EditBlogComponent.vue";
import RtoFormComponent from "./components/RtoFormComponent.vue";
import CreateCourseComponent from "./components/courses/CreateCourseComponent.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("blog-create", CreateBlog);
app.component("blog-list-component", BlogListComponent);
app.component("basic-informations", BasicInformations);
app.component("password-change", PasswordChange);
app.component("blog-edit-component", EditBlogComponent);
app.component("rto-form-component", RtoFormComponent);
app.component("create-course-component", CreateCourseComponent);

app.mount("#app");

require("./bootstrap");
require("alpinejs");
