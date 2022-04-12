<template>
  <div class="modal" v-if="show" @click="closeModal">
    <div class="modal_body relative m-auto p-8 bg-slate-200 top-0" @click.stop>
      <button @click.stop="closeModal" class="absolute right-0">&#10006;</button>
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    show: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    closeModal() {
      this.$emit("update:show", false);
    },
  },
};
</script>

<style scoped>
.modal {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  display: flex;
  background: rgba(0, 0, 0, 0.4);
}
</style>