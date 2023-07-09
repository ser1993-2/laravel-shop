<template>
    <div class="col">
<!--        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg category-card"-->
<!--             v-bind:style="'background-image: url('+ basketProduct.image.src +');'"-->
<!--        >-->
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ basketProduct.title }}</h3>
            </div>
        </div>
<!--    </div>-->
</template>

<script>
export default {
    name: "Card",
    props: ['basketProduct'],
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
