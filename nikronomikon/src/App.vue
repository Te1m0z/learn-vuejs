<template>
  <AppNavigation />
  <div class="container mx-auto">
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