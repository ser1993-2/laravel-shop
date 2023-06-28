<template>
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'/'">Главная</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'category'">Категории</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'/'">О компании</router-link>
        </li>
        <li>
            <router-link class="nav-link px-2 link-body-emphasis" :to="'/'">Контакты</router-link>
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
