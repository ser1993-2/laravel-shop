<template>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <Logo/>

                <Menu/>

                <Search/>

                <Auth/>
            </div>
        </div>
    </header>
</template>

<script>

import Menu from "../layouts/Header/Menu.vue";
import Search from "../layouts/Header/Search.vue";
import Auth from "../layouts/Header/Auth.vue";
import Logo from "../layouts/Header/Logo.vue";

export default {
    name: "Header",
    components: {
        Menu,
        Search,
        Auth,
        Logo
    }
}
</script>

<style scoped>

</style>
