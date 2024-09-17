<template>
  <div class="container">
    <div class="left-half">
      <div class="login-container">
        <h2>Login</h2>
        <form @submit.prevent="login">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" v-model="form.email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" v-model="form.password" required>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
    <div class="right-half"></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    login() {
      // Implement login logic here
    }
  }
}
</script>

<style scoped>
/* Add your CSS styles here, or import them from a separate file */
</style>