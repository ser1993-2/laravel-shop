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
                :dataName="'brand'"
                :list="filters.brand"
            />

            <CheckboxList
                v-if="filters.model"
                :title="'Модель'"
                :dataName="'model'"
                :list="filters.model"
            />

            <template v-if="filters.properties" v-for="property in filters.properties">
                <PropertyNumberRange
                    v-if="property.type === 'range'"
                    :title="property.title"
                />

                <PropertyCheckboxList
                    v-if="property.type === 'checklist'"
                    :title="property.title"
                    :dataName="property.alias"
                    :values="property.values"
                />
            </template>

        </ul>

    </li>

</template>

<script>

import NumberRange from "./Filter/NumberRange.vue";
import CheckboxList from "./Filter/CheckboxList.vue";
import PropertyCheckboxList from "./Filter/PropertyCheckboxList.vue";
import PropertyNumberRange from "./Filter/PropertyNumberRange.vue";

export default {

    name: "Filter",
    components: {
        NumberRange,
        CheckboxList,
        PropertyCheckboxList,
        PropertyNumberRange
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
