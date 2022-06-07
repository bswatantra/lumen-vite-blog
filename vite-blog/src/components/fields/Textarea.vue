<template>
      <label class="block text-gray-700 text-sm font-bold mb-2" :for="label">
        {{label}}
      </label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :id="label" :type="type" :placeholder="placeholder"></textarea>
</template>

<script setup>
import { ref } from 'vue'
defineProps({
  label: {
	type: String,
	default: 'Username'
  },
  type: {
	type: String,
	default: 'text'
  },
  placeholder: {
	type: String,

  }
})
</script>