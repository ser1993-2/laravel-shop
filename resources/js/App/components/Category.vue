<template>
    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

                <Card
                    v-for="category in categories"
                    :category="category"
                />

        </div>
    </div>
</template>

<script>

import Card from "../layouts/Category/Card.vue";

export default {
    name: "Category",
    components: {
        Card
    },
    computed: {
        categories() {
            return this.$store.getters.getCategories;
        },
    },
    mounted() {
        this.$store.dispatch('GET_CATEGORIES');
    }
}
</script>

<style scoped>

</style>
