<template>
  <div class="flex my-2 w-full">
    <label :for="id" class="inline-block w-1/3 pr-3">{{ label }}</label>
    <textarea
      :type="type"
      :id="id"
      class="border rounded-md border-cyan-400 max-h-48 w-full px-2 py-1"
      :value="modelValue"
      @input="updateTextarea"
    ></textarea>
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
  },
  methods: {
    updateTextarea(event) {
      this.$emit("update:modelValue", event.target.value);
    },
  },
};
</script>
