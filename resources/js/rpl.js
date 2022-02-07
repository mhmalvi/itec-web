import { createApp } from "vue";
import axios from "axios";
import FormComponent from "./components/mailables/FormComponent.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("form-component", FormComponent);
app.mount("#rpl");
