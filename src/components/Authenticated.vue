<template>
  <div class="l-authenticated">
    ログイン済み
    <div>
      <img :src="$auth.user.picture">
      <h2>{{ $auth.user.name }}</h2>
      <p>{{ $auth.user.email }}</p>
    </div>
    <!-- show logout when authenticated -->
    <button class="btn btn-info" @click="logout">Log out</button>
  </div>
</template>

<script>
export default {
  name: 'authenticated',
  methods: {
    // Log the user out
    logout() {
      this.$auth.logout({
        returnTo: window.location.origin
      });
    }
  }
}
</script>

<style lang="scss" scoped>
@import 'node_modules/bootstrap/scss/bootstrap';
</style>
