import { createApp } from "vue";
import axios from "axios";
import CreateBlog from "./components/blogs/CreateBlog.vue";
import BlogListComponent from "./components/blogs/BlogListComponent.vue";
import BasicInformations from "./components/profile/BasicInformations.vue";
import PasswordChange from "./components/profile/PasswordChange.vue";
import EditBlogComponent from "./components/blogs/EditBlogComponent.vue";
import RtoFormComponent from "./components/RtoFormComponent.vue";
import CreateCourseComponent from "./components/courses/CreateCourseComponent.vue";
import CourseListComponent from "./components/courses/CourseListComponent.vue";
import EditCourseComponent from "./components/courses/EditCourseComponent.vue";

import IndustryListComponent from "./components/industries/IndustryListComponent.vue";
import CreateIndustryComponent from "./components/industries/CreateIndustryComponent.vue";
import EditIndustryComponent from "./components/industries/EditIndustryComponent.vue";

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
app.component("course-list-component", CourseListComponent);
app.component("edit-course-component", EditCourseComponent);

app.component("industry-list-component", IndustryListComponent);
app.component("create-industry-component", CreateIndustryComponent);
app.component("edit-industry-component", EditIndustryComponent);

app.mount("#app");

require("./bootstrap");
require("alpinejs");
