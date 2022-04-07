import { createRouter, createWebHistory } from "vue-router";

import HomePage from "@/pages/HomePage.vue";

export const router = createRouter({
  mode: "history",
  history: createWebHistory(),
  routes: [
    {
      name: "Home",
      path: "/",
      component: HomePage
    },
    {
      name: "ElementsPage",
      path: "/elements",
      component: () => import("@/pages/ElementsPage.vue")
    }
  ]
});
