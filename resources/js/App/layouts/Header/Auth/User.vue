<template>
    <ul class="nav">
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'login'">Вход</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'registration'">Регистрация</router-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: "User"
}
</script>

<style scoped>

</style>
