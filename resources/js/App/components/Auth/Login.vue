<template>
    <main class="form-signin w-50 container-fluid">
        <div>
            <div class="form-floating">
                <input type="email" class="form-control" v-model="user.email" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" v-model="user.password"  id="password" placeholder="Пароль">
                <label for="password">Пароль</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Запомнить меня
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" v-on:click="login" type="submit">Войти</button>
        </div>
    </main>
</template>

<script>
export default {
    name: "Login" ,
    data() {
        return {
            user: {
                email: '',
                password: '',
            }
        }
    },
    methods: {
        login() {
            axios.post('/api/user/login' , this.user)
                .then((response) => {
                    console.log(response);
                }).catch((error) => {
                console.log(error);
            })
        }
    },
}
</script>

<style scoped>

</style>
