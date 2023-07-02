<template>
    <main class="form-signin w-50 container-fluid">
        <div>
            <div class="form-floating">
                <input type="email" class="form-control" v-model="currentUser.name" id="name" placeholder="name@example.com">
                <label for="name">Имя</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" v-model="currentUser.email" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" v-model="currentUser.password" id="password" placeholder="Пароль">
                <label for="password">Пароль</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" v-model="currentUser.password_confirmation" id="password_confirmation" placeholder="Подтвердить пароль">
                <label for="password">Подтвердить пароль</label>
            </div>

            <Error/>

            <button class="btn btn-primary w-100 py-2" v-on:click="register" type="submit">Зарегистрироваться</button>
        </div>
    </main>
</template>

<script>

import Error from "../../layouts/Header/Auth/Form/Error.vue";

export default {
    name: "Registration",
    components: {
        Error,
    },
    computed: {
        currentUser() {
            this.checkIsAuth();
            return this.$store.getters.getCurrentUser;
        },
    },
    mounted() {
        this.$store.dispatch('errorsClear');
        this.checkIsAuth();
    },
    methods: {
        register() {
            this.$store.dispatch('register', this.currentUser);
        },
        checkIsAuth() {
            if (this.$store.getters.getIsAuth) {
                this.$router.push('/');
            }
        }
    },
}
</script>

<style scoped>

</style>
