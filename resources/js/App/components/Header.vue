<template>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <Logo/>

                <Menu/>

                <Search/>

                <Basket/>

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
import Basket from "../layouts/Header/Auth/Basket.vue";

export default {
    name: "Header",
    components: {
        Menu,
        Search,
        Auth,
        Logo,
        Basket
    }
}
</script>

<style scoped>

</style>
