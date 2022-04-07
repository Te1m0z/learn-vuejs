<template>
  <post-form @creatingPost="creatingPostInApp" />
  <post-list :list="posts" />
</template>

<script>
import PostForm from "@/components/PostForm.vue";
import PostList from "@/components/PostList.vue";
export default {
  components: { PostForm, PostList },
  name: "App",
  data() {
    return {
      posts: []
    };
  },
  methods: {
    creatingPostInApp(post) {
      this.posts.push(post);
    }
  }
};
</script>

