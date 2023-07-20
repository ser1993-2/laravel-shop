<template>

    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-2">
            Итог: {{ total_price }} ₽
        </div>
        <div class="col-lg-2">
            <small class="text-body-secondary">
                <button v-if="isOrderButton" class="btn btn-primary">Оформить</button>

                <button v-if="!isOrderButton" class="btn btn-primary" type="button" disabled="">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                </button>
            </small>
        </div>
        <div class="col-lg-2">

        </div>
    </a>
</template>

<script>
export default {
    name: "Card",
    props: ['basketProducts'],
    data() {
        return {
            total_price : 0,
        }
    },
    computed: {
        isOrderButton() {
            return this.$store.getters.getIsOrderButton;
        },
    },
    watch: {
        basketProducts() {
            this.total_price = 0;

            Object.values(this.basketProducts).forEach((basketProduct) => {
                this.total_price += basketProduct.product.price * basketProduct.quantity;
            });
        },
    },

}
</script>
