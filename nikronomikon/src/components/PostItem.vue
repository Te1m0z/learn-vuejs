<template>
  <div>
    <div>
      <p>{{ post.name }}</p>
      <p>{{ post.text }}</p>
    </div>
    <div class="mx-auto inline-block mt-5">
      <my-button>Delete</my-button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  }
};
</script>