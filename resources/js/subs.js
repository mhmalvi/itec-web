import { createApp } from "vue";
import axios from "axios";
import SubscribersComponent from "./components/mailables/SubscribersComponent.vue";

const app = createApp({});

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.component("subscribers-component", SubscribersComponent);
app.mount("#subs");
