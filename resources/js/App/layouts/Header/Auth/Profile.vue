<template>
    <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
        </a>
        <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
        <a href="#" v-on:click="logout">Выход</a>
    </div>
</template>

<script>
export default {
    name: "User",
    methods: {
        logout() {
            this.$store.dispatch('logout');
            this.$router.push('/');
        },
    }
}
</script>

<style scoped>

</style>
