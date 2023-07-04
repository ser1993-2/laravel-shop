<template>
    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
        <div class="col-lg-4">
            <img src="/images/category/videocard.webp" width="200" height="96" alt="">
        </div>
        <div class="col-lg-4">
            <h6 class="mb-0">{{ product.title }}</h6>
            <small class="text-body-secondary">*4.5</small>
        </div>
        <div class="col-lg-2">
            <h6 class="mb-0">{{ product.price }} ₽</h6>
        </div>
        <div class="col-lg-2">
            <small class="text-body-secondary">
                <button class="btn btn-success">В корзину</button>
            </small>
        </div>
    </a>

</template>

<script>
export default {
    name: "Card",
    props: ['product'],
}
</script>

<style scoped>

.category-card {
    background-color:white;
    background-position:center;
    background-size: cover;
}

</style>
