<template>
    <div class="form-check text-start my-3" >
        <ul>
            <li v-for="error in errors">
                <span style="color: red">{{ error }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Error",
    computed: {
        errors() {
            return this.$store.getters.getErrors;
        },
    },
}
</script>

<style scoped>

</style>
