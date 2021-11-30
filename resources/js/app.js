require("./bootstrap");
import { createApp } from "vue";
import CreateBlog from "./components/blogs/CreateBlog.vue";

const app = createApp({});

app.component("blog-create", CreateBlog);

app.mount("#app");

require("alpinejs");
