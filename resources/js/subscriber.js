import { createApp } from "vue";
import axios from "axios";
import SubscribersComponent from "./components/mailables/SubscribersComponent.vue";

const app = createApp({});

app.component("subscribers-component", SubscribersComponent);

axios.defaults.baseURL = document.head.querySelector(
    'meta[name="api-base-url"]'
).content;

app.mount("#subs");
