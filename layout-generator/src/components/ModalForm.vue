<template>
  <div
    class="top-0 left-0 right-0 bottom-0 fixed flex"
    v-if="show"
    style="background: rgba(0, 0, 0, 0.5)"
    @click.stop="hideModal"
  >
    <div class="m-auto bg-sky-200 p-3" @click.stop>
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
    hideModal() {
        this.$emit('update:show', false)
    },
  },
};
</script>