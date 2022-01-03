import { createApp } from "vue";
import axios from "axios";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.mount("#app");
