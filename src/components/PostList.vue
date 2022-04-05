<template>
  <div>
    <h3 class="text-2xl text-center">Post Item Lists</h3>
    <post-item
      v-for="post in list"
      :key="post.id"
      :post="post"
      class="border border-rose-600 p-5"
    />
  </div>
</template>

<script>
import PostItem from "@/components/PostItem.vue";
export default {
  components: {
    PostItem
  },
  props: {
    list: {
      type: Array,
      required: true
    }
  }
};
</script>