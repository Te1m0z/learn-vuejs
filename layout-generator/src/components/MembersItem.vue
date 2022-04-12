<template>
  <div class="member-item">
    <p>Name: {{ member.fio }}</p>
    <p>Address: {{ member.address }}</p>
    <p>
      <button @click.stop="$emit('edit')">Edit</button>
      <button @click.stop="$emit('delete')">Delete</button>
    </p>
  </div>
</template>

<script>
export default {
  props: {
    member: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style scoped>
.member-item {
  border: 1px solid red;
  padding: 10px;
}
</style>