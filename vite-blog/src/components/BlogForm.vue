<script setup>

import Input from './fields/Input.vue'
import { ref } from 'vue'
</script>

<template>
  <div class="w-full max-w-xs mx-auto">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <Input label="Username" placeholder="Username"></Input>
    </div>
    <div class="mb-6">
      <Input label='Password' type="password" placeholder="Password" v-model="password"></Input>
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>
</template>

<style scoped>
a {
  color: #42b983;
}
</style>
