import { createRouter, createWebHashHistory } from "vue-router";

import HomePage from "@/pages/HomePage.vue";

export const router = createRouter({
  history: createWebHashHistory(),
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

export function routerPush(name, params) {
  if (params !== undefined) {
    return router.push({
      name,
      params
    });
  } else {
    return router.push({ name });
  }
}
