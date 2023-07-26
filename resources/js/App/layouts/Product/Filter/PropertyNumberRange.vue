<template>
    <li class="list-group-item justify-content-between lh-sm">

        <div>
            <h6 class="my-0 col-5">{{ title }}</h6>
        </div>

        <br>

        <div class="row">
            <div class="col-5">
                <input type="text"  v-on:change="setProperty" class="form-control" placeholder="0">
            </div>
            <div class="col-2">
                -
            </div>
            <div class="col-5">
                <input type="text" v-on:change="setProperty" class="form-control" placeholder="1000">
            </div>
        </div>
    </li>
</template>

<script>
export default {
    name: "NumberRange",
    props: ['title'],
    computed: {
        filterRequest() {
            return this.$store.getters.getFilterRequest;
        },
    },
    methods: {
        setProperty() {
            this.$store.dispatch('GET_PRODUCTS_BY_FILTERS', this.filterRequest);
        },
    }
}
</script>

<style scoped>

</style>
