<template>
    <span class="text-success" v-if="message">
        <p>{{ message }}</p>
    </span>
</template>

<script setup>

defineProps({
  message: {
	type: String,
  },
})
</script>