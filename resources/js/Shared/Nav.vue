<template>
  <nav>
    <ul class="flex space-x-4 list-inside">
      <li>
        <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
      </li>
      <li>
        <NavLink href="/users" :active="$page.component === 'Users'"
          >Users</NavLink
        >
      </li>
      <li>
        <NavLink href="/settings" :active="$page.component === 'Settings'"
          >Settings</NavLink
        >
      </li>
      <li>
        <NavLink href="/logout" method="post" :data="{ foo: 'bar' }" as="button"
          >Logout</NavLink
        >
      </li>
    </ul>
  </nav>
</template>

<script>
import NavLink from "./NavLink.vue";

export default {
  components: { NavLink },
  name: "Nav",
};
</script>

<style scoped>
</style>
