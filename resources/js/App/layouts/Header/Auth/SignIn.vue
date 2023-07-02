<template>
    <ul class="nav">
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'login'">Вход</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'register'">Регистрация</router-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: "Login",
}
</script>

<style scoped>

</style>
