<template>
  <input
    type="text"
    :value="modelValue"
    @input="updateInput"
    :placeholder="holder"
    class="border p-2 my-2"
  />
</template>

<script>
export default {
  name: "my-input",
  props: {
    holder: String,
    modelValue: [String, Number]
  },
  methods: {
    updateInput(event) {
      this.$emit("update:modelValue", event.target.value);
    }
  }
};
</script>