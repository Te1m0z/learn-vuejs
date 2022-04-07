import { createApp } from "vue";
import { router } from "@/router.js";
import App from "./App.vue";
import "./index.css";
import components from "@/components/UI";

const app = createApp(App);
components.forEach((comp) => {
  app.component(comp.name, comp);
});
app.use(router);
app.mount("#app");
