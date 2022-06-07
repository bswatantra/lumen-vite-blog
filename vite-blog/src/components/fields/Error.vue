<template>
<div class="text-danger">
    {{$message}}
</div>
</template>

<script setup>

defineProps({
  message: {
	type: String,
  },
})
</script>