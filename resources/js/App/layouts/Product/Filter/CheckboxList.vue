<template>
    <li class="list-group-item justify-content-between lh-sm">
        <div>
            <h6 class="my-0">{{ title }}</h6>
        </div>

        <div class="row">
            <div class="col-12">
                <label class="list-group-item d-flex gap-2" v-for="item in list">
                    <input class="form-check-input flex-shrink-0" type="checkbox" v-model="item.checked" v-on:change="setValue(item.id, item.checked)">
                    <span>{{ item.title }}</span>
                </label>
            </div>
        </div>

    </li>
</template>

<script>
export default {
name: "CheckboxList",
    props: ['title','dataName','list'],
    computed: {
        filterRequest() {
            return this.$store.getters.getFilterRequest;
        },
    },
    methods: {
        setValue(selectId, checked) {

            if ( !(this.dataName in this.filterRequest) ) {
                this.filterRequest[this.dataName] = [];
            }

            if (checked) {
                this.filterRequest[this.dataName].push(selectId)
            } else {
                this.filterRequest[this.dataName] = this.filterRequest[this.dataName].filter((existId) => {
                    return existId !== selectId;
                })
            }

            this.$store.dispatch('GET_PRODUCTS_BY_FILTERS', this.filterRequest);
        },
    }
}
</script>

<style scoped>

</style>
