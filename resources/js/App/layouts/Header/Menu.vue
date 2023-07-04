<template>
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'main'}">Главная</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'category'}">Категории</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'main'}">О компании</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'main'}">Контакты</router-link>
        </li>
    </ul>
</template>

<script>
export default {
    name: "Menu"
}
</script>

<style scoped>

</style>
