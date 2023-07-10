<template>
    <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'basket'}">
    <div class="nav-link px-2 link-body-emphasis">
        <div class="margin-right">

            <span class="d-block link-body-emphasis text-decoration-none">
                <img src="/images/basket/cart.png" alt="mdo" width="32" height="32">
            </span>

            {{ basket.products ? basket.products.length : '' }}
        </div>
    </div>
    </router-link>

</template>

<script>
export default {
    name: "Basket",
    computed: {
        basket() {
            return this.$store.getters.getBasket;
        },
    },
    mounted() {
        this.$store.dispatch('GET_BASKET');
    }
}
</script>

<style scoped>
.margin-right {
    margin-right: 10px;
}
</style>
