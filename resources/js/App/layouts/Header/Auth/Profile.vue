<template>
    <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/avatar/avatar.jpeg" alt="mdo" class="rounded-circle" width="32" height="32">
        </a>
        <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Профиль</a></li>
            <li><a class="dropdown-item" href="#">Профиль</a></li>
            <li><a class="dropdown-item" href="#">Профиль</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" v-on:click="logout">Выход</a></li>
        </ul>
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
