require("./bootstrap");
import { createApp } from "vue";
import axios from "axios";
import CreateBlog from "./components/blogs/CreateBlog.vue";
import BlogListComponent from "./components/blogs/BlogListComponent.vue";
import EditBlogComponent from "./components/blogs/EditBlogComponent.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("blog-create", CreateBlog);
app.component("blog-list-component", BlogListComponent);
app.component("blog-edit-component", EditBlogComponent);

app.mount("#app");

require("alpinejs");
