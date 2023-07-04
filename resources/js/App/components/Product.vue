<template>

    <div class="row g-5">

        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">{{ category.title }}</h3>

            <article class="blog-post">

                <ProductCard
                    v-for="product in products"
                    :product="product"
                />

            </article>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">

                <div>
                    <h4 class="fst-italic">Фильтр</h4>
                    <ul class="list-unstyled">

                        <ProductFilter/>

                    </ul>
                </div>

            </div>
        </div>

    </div>


</template>

<script>

import ProductCard from "../layouts/Product/ProductCard.vue";
import ProductFilter from "../layouts/Product/ProductFilter.vue";

export default {
    name: "Product",
    components: {
        ProductCard,
        ProductFilter
    },
    computed: {
        products() {
            return this.$store.getters.getProducts;
        },
        category() {
            return this.$store.getters.getCategory;
        },
    },
    mounted() {
        this.$store.dispatch('GET_PRODUCTS_BY_CATEGORY_ALIAS', this.$route.params.alias);
        this.$store.dispatch('GET_CATEGORY_BY_ALIAS', this.$route.params.alias);
    }
}
</script>

<style scoped>

</style>
