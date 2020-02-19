<template>
  <div class="home">
    <Unauthenticated v-if="!$auth.isAuthenticated" />
    <Authenticated v-if="$auth.isAuthenticated" />
  </div>
</template>

<script>
// @ is an alias to /src
import Authenticated from '@/components/Authenticated'
import Unauthenticated from '@/components/Unauthenticated'

export default {
  name: 'home',
  components: {
    Authenticated,
    Unauthenticated,
  },
}
</script>
