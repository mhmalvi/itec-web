require("./bootstrap");
import { createApp } from "vue";
import CreateBlog from "./components/blogs/CreateBlog.vue";
import BlogListComponent from "./components/blogs/BlogListComponent.vue";

const app = createApp({});

app.component("blog-create", CreateBlog);
app.component("blog-list-component", BlogListComponent);

app.mount("#app");

require("alpinejs");
