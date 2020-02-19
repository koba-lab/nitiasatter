<template>
  <div class="l-unauthenticated">
    <div class="text-center">
      <div>
        <p>ニチアサッターは、ニチアサ実況をより快適に行うためのTwitterクライアントです。</p>
        <p>ニチアサッターで快適な実況生活を始めましょう！</p>
        <img class="img-fluid" alt="Vue logo" src="../assets/logo.png">
      </div>

      <!-- show login when not authenticated -->
      <button class="btn btn-info" @click="login">Log in</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'unauthenticated',
  methods: {
    // Log the user in
    login() {
      this.$auth.loginWithRedirect();
    },
  }
}
</script>

<style lang="scss" scoped>
@import 'node_modules/bootstrap/scss/bootstrap';
</style>
