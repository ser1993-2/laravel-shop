<template>
    <li class="list-group-item justify-content-between lh-sm">
        <div>
            <h6 class="my-0">{{ title }}</h6>
        </div>

        <div class="row">
            <div class="col-12">
                <label class="list-group-item d-flex gap-2" v-for="value in values">
                    <input class="form-check-input flex-shrink-0" type="checkbox" @change="setValue($event,value)">
                    <span>{{ value }}</span>
                </label>
            </div>
        </div>

    </li>
</template>

<script>
export default {
name: "PropertyCheckboxList",
    props: ['title','dataName','values'],
    computed: {
        filterRequest() {
            return this.$store.getters.getFilterRequest;
        },
    },
    methods: {
        setValue(event, value) {
            if ( !('properties' in this.filterRequest) ) {
                this.filterRequest.properties = {};
            }

            if ( !(this.dataName in this.filterRequest.properties) ) {
                this.filterRequest.properties[this.dataName] = [];
            }

            if (event.target.checked) {
                this.filterRequest.properties[this.dataName].push(value)
            } else {
                this.filterRequest.properties[this.dataName] = this.filterRequest.properties[this.dataName].filter((existValue) => {
                    return existValue !== value;
                })
            }


            this.$store.dispatch('GET_PRODUCTS_BY_FILTERS', this.filterRequest);
        },
    }
}
</script>

<style scoped>

</style>
