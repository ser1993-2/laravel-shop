<template>
    <div class="margin-right">
        <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/basket/cart.png" alt="mdo" width="32" height="32">
        </a>
        {{ basket.products.length }}
    </div>
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
