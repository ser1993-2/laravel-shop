<template>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 , Laravel shop</p>

        <Logo/>

        <Menu/>
    </footer>
</template>

<script>

import Logo from "../layouts/Footer/Logo.vue";
import Menu from "../layouts/Footer/Menu.vue";

export default {
    name: "Footer",
    components: {
        Logo,
        Menu
    }
}
</script>

<style scoped>

</style>
