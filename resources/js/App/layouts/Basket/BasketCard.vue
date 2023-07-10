<template>

    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
        <div class="col-lg-4">
            <img src="/images/category/videocard.webp" width="200" height="96" alt="">
        </div>
        <div class="col-lg-4">
            <h6 class="mb-0">{{ basketProduct.product.title }}</h6>
            <small class="text-body-secondary">*4.5</small>
        </div>
        <div class="col-lg-2">
            <h6 class="mb-0">{{ basketProduct.product.price }} ₽</h6>
        </div>
        <div class="col-lg-2">
            <h6 class="mb-0">Количество: {{ basketProduct.quantity }} шт.</h6>
        </div>
        <div class="col-lg-2">
            <small class="text-body-secondary">
                <button class="btn btn-danger" v-on:click="deleteProduct(basketProduct.product.id)">Убрать</button>
            </small>
        </div>
    </a>
</template>

<script>
export default {
    name: "Card",
    props: ['basketProduct'],
    methods: {
        deleteProduct(product_id) {
            this.$store.dispatch('DELETE_BASKET_PRODUCT',product_id);
        },
    }
}
</script>

<style scoped>

.category-card {
    cursor: pointer;
    background-color:white;
    background-position:center;
    background-size: cover;
}

</style>
