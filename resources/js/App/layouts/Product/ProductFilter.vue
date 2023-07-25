<template>
    <li>
        <ul class="list-group mb-3">

            <NumberRange
                v-if="filters.price"
                :title="'Цена'"
            />

            <CheckboxList
                v-if="filters.brand"
                :title="'Бренд'"
                :list="filters.brand"
            />

            <CheckboxList
                v-if="filters.model"
                :title="'Модель'"
                :list="filters.model"
            />

        </ul>

    </li>

</template>

<script>

import NumberRange from "./Filter/NumberRange.vue";
import CheckboxList from "./Filter/CheckboxList.vue";

export default {

    name: "Filter",
    components: {
        NumberRange,
        CheckboxList
    },
    computed: {
        filters() {
            return this.$store.getters.getFilter;
        },
    },
    mounted() {
        this.$store.dispatch('GET_FILTER_BY_CATEGORY_ALIAS', this.$route.params.alias);
    },
}

</script>

<style scoped>
</style>
