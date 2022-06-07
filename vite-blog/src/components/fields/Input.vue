<template>
     <Label :label="label"/>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="modelValue" :id="label" :type="type" :placeholder="placeholder">
	<Error/>
</template>

<script setup>
import Label from './Label.vue'
import Error from './Error.vue'
import { computed,} from 'vue';
defineProps({
  label: {
	type: String,
  },
  type: {
	type: String,
	default: 'text'
  },
  placeholder: {
	type: String,
  }
})


computed({
	get() { return this.value;},
	set(val) {this.$emit("input", val);},
});
</script>