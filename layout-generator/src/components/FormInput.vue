<template>
  <div class="flex my-2">
    <label :for="id" class="inline-block w-1/3">{{ label }}</label>
    <input
      :type="type"
      :id="id"
      :placeholder="holder"
      :value="modelValue"
      @input="updateInput"
      class="border rounded-md border-cyan-400 ml-3 w-1/3 h-fit"
    />
    <slot></slot>
  </div>
</template>

<script>
export default {
  props: {
    modelValue: [String, Number],
    type: {
      type: String,
      default: "text",
    },
    id: {
      type: String,
      required: true,
    },
    label: String,
    holder: {
      type: String,
      required: false,
      default: "URL",
    },
  },
  methods: {
    updateInput(event) {
      this.$emit("update:modelValue", event.target.value);
    },
  },
};
</script>
