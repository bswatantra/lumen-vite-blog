<template>
   <label class="block text-gray-700 text-sm font-bold mb-2" :for="label">
        {{label}}
      </label>
</template>

<script setup>
import { ref } from 'vue'
defineProps({
  label: {
	type: String,
  }
})
</script>