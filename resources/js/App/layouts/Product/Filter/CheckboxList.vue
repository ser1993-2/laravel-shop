<template>
    <li class="list-group-item justify-content-between lh-sm">
        <div>
            <h6 class="my-0">{{ title }}</h6>
        </div>

        <div class="row">
            <div class="col-12">
                <label class="list-group-item d-flex gap-2" v-for="filter in list">
                    <input class="form-check-input flex-shrink-0" type="checkbox" value="">
                    <span>
                                {{filter.title }}
                            </span>
                </label>
            </div>
        </div>

    </li>
</template>

<script>
export default {
name: "CheckboxList",
    props: ['title','list'],
}
</script>

<style scoped>

</style>
