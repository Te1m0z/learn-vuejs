<template>
  <AppNavigation />
  <div class="container mx-auto text-white">
    <router-view />
  </div>
</template>

<script>
import AppNavigation from "@/components/AppNavigation.vue";
export default {
  components: {
    AppNavigation
  }
};
</script>