<template>
    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
        <div class="col-lg-4">
            <img v-bind:src="product.image.src" width="200" height="96" alt="">
        </div>
        <div class="col-lg-4">
            <h6 class="mb-0">{{ product.title }}</h6>
            <ul v-if="product.product_properties">
                <li v-for="product_property in product.product_properties"> {{product_property.property.title }} : <b>{{ product_property.value }}</b> </li>
            </ul>
        </div>
        <div class="col-lg-2">
            <h6 class="mb-0">{{ product.price }} ₽</h6>
        </div>
        <div class="col-lg-2">
            <small class="text-body-secondary">
                <button v-if="!isProductInCart" class="btn btn-success" v-on:click="addProductToBasket(product.id)">В корзину</button>
                <button v-if="isProductInCart" class="btn btn-warning" >В корзине</button>
            </small>
        </div>
    </a>

</template>

<script>
export default {
    name: "Card",
    props: ['product'],
    computed: {
        isProductInCart() {
            let basket = this.$store.getters.getBasket;
            let isProductInCart = false;

            if (basket.products) {
                basket.products.forEach((item) => {
                    if (item.id === this.product.id) {
                        isProductInCart = true;
                    }
                })
            }

            return isProductInCart;
        },
    },
    methods: {
        addProductToBasket(product_id) {
            this.$store.dispatch('ADD_BASKET_PRODUCT',product_id);
        },
    },

}
</script>

<style scoped>

.category-card {
    background-color:white;
    background-position:center;
    background-size: cover;
}

</style>
