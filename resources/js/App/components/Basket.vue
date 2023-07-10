<template>


  <div class="row g-5">

    <div class="col-md-10">

      <h3 v-if="!basketProducts.length" class="pb-4 mb-4 fst-italic">Корзина пуста</h3>

      <article class="blog-post">

        <BasketCard
            v-for="basketProduct in basketProducts"
            :basketProduct="basketProduct"
        />

      </article>

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
