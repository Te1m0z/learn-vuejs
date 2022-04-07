<template>
  <form @submit.prevent class="border mt-5 flex flex-col border-rose-500 p-5">
    <my-input v-model="post.name" holder="Name" />
    <my-input holder="Post text" v-model="post.text" />
    <my-button @click="createPost">Crate Post</my-button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      post: {
        id: null,
        name: "",
        text: ""
      }
    };
  },
  methods: {
    createPost() {
      this.post.id = Date.now();
      this.$emit("creatingPost", this.post);
      this.post = {
        name: "",
        text: ""
      };
    }
  }
};
</script>

<style>
</style>