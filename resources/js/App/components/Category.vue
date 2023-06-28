<template>
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <Card/>

        </div>
    </div>
</template>

<script>

import Card from "../layouts/Category/Card.vue";

export default {
    name: "Category",
    components: {
        Card
    }
}
</script>

<style scoped>

</style>
