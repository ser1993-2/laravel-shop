<template>
    <li>
        <ul class="list-group mb-3">
            <li class="list-group-item justify-content-between lh-sm">

                <div>
                    <h6 class="my-0 col-5">Цена</h6>
                </div>

                <br>

                <div class="row">
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="col-2">
                        до
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="999999">
                    </div>
                </div>
            </li>

            <li class="list-group-item justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">Бренд</h6>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="list-group-item d-flex gap-2" v-for="filter in filters.brand">
                            <input class="form-check-input flex-shrink-0" value="" checked="">
                            <span>
                                {{filter.title }}
                            </span>
                        </label>
                    </div>
                </div>

            </li>

            <li class="list-group-item justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">Модель</h6>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label class="list-group-item d-flex gap-2" v-for="filter in filters.model">
                            <input class="form-check-input flex-shrink-0" value="" checked="">
                            <span>
                                {{filter.title }}
                            </span>
                        </label>
                    </div>
                </div>

            </li>

            <li class="list-group-item d-flex justify-content-between">
                <button class="btn btn-info">Поиск</button>
            </li>
        </ul>

    </li>

</template>

<script>
export default {

    name: "Filter",
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
