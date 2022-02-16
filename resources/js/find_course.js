import { createApp } from "vue";
import axios from "axios";
import FindCourseComponent from "./components/FindCourseComponent.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("find-course-component", FindCourseComponent);

app.mount("#find_course");
