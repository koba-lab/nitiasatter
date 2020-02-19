<template>
  <div id="app" class="container">
    <div id="nav" class="text-center py-5">
      <router-link to="/">
        <img src="@/assets/images/logo.png" alt="nitiasatter">
      </router-link>
    </div>

    <!-- content -->
    <router-view/><!-- /content -->

    <section>
      <h3>env check</h3>
      <dl>
        <dt>NODE_ENV</dt>
        <dd>{{env.NODE_ENV}}</dd>

        <dt>VUE_APP_DOMAIN</dt>
        <dd>{{env.VUE_APP_DOMAIN}}</dd>

        <dt>VUE_APP_CLIENT_ID</dt>
        <dd>{{env.VUE_APP_CLIENT_ID}}</dd>
      </dl>
    </section>
  </div>
</template>

<script>
export default {
  name: 'app',
  computed: {
    env() {
      return process.env
    }
  }
}
</script>

<style lang="scss" scoped>
@import 'node_modules/bootstrap/scss/bootstrap';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

#nav {
  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
