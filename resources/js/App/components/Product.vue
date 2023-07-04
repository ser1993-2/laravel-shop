<template>
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <ProductCard
                v-for="product in products"
                :product="product"
            />

        </div>
    </div>
</template>

<script>

import ProductCard from "../layouts/Category/ProductCard.vue";

export default {
    name: "Product",
    components: {
        ProductCard
    },
    computed: {
        products() {
            return this.$store.getters.getProducts;
        },
    },
    mounted() {
        this.$store.dispatch('GET_PRODUCTS_BY_CATEGORY_ALIAS', this.$route.params.alias);
    }
}
</script>

<style scoped>

</style>
