<template>
    <router-link class="nav-link px-2 link-body-emphasis" :to="{ 'name' : 'basket'}">
    <div class="nav-link px-2 link-body-emphasis">
        <div>

            <img class="cart-logo" src="/images/basket/cart.png" alt="mdo" width="32" height="32">

            <div class="basket-count">
                {{ basket.products ? basket.products.length : '' }}
            </div>

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
.cart-logo {
    position: absolute;
}

.basket-count{
    background-color: orange;
    padding: 3px 7px;
    color: white;
    border-radius: 50px;
    position: relative;
    top: -12px;
    left: 20px;
}

</style>
