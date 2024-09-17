<template>
  <div class="flex items-center justify-between p-4 bg-gray-800 text-white">
    <div class="text-xl font-bold">Your App Name</div>
    <button @click="toggleMenu" class="md:hidden">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    <nav class="hidden md:block">
      <a href="/login" class="mx-2 hover:text-gray-300">Login</a>
      <a href="/register" class="mx-2 hover:text-gray-300">Register</a>
    </nav>
  </div>
  <div v-if="isMenuOpen" class="md:hidden">
    <nav class="bg-gray-700 text-white p-4">
      <a href="/login" class="block py-2">Login</a>
      <a href="/register" class="block py-2">Register</a>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isMenuOpen: false
    }
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen
    }
  }
}
</script>