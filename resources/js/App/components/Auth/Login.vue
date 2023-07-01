<template>
    <main class="form-signin w-50 container-fluid">
        <div>
            <div class="form-floating">
                <input type="email" class="form-control" v-model="currentUser.email" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" v-model="currentUser.password"  id="password" placeholder="Пароль">
                <label for="password">Пароль</label>
            </div>

            <div class="form-check text-start my-3" >
                <ul>
                    <li v-for="error in errors">
                        <span style="color: red">{{ error }}</span>
                    </li>
                </ul>
            </div>

            <button class="btn btn-primary w-100 py-2" v-on:click="login" type="submit">Войти</button>
        </div>
    </main>
</template>

<script>
export default {
    name: "Login" ,
    computed: {
        currentUser() {
            this.checkIsAuth();
            return this.$store.getters.getCurrentUser;
        },
        errors() {
            return this.$store.getters.getErrors;
        },
    },
    mounted() {
        this.checkIsAuth();
    },
    methods: {
        login() {
            this.$store.dispatch('login', this.currentUser);
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
