<template>
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <BasketCard
                v-for="basketProduct in basketProducts"
                :basketProduct="basketProduct"
            />

        </div>
    </div>
</template>

<script>

import BasketCard from "../layouts/Basket/BasketCard.vue";

export default {
    name: "Basket",
    components: {
        BasketCard
    },
    computed: {
        basketProducts() {
            return this.$store.getters.getBasketProducts;
        },
    },
    mounted() {
        this.$store.dispatch('GET_BASKET_PRODUCTS');
    }
}
</script>

<style scoped>

</style>
