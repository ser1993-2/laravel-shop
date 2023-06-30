<template>
    <main class="form-signin w-50 container-fluid">
        <div>
            <div class="form-floating">
                <input type="email" class="form-control" id="name" placeholder="name@example.com">
                <label for="name">Имя</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Пароль">
                <label for="password">Пароль</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password_confirmation" placeholder="Подтвердить пароль">
                <label for="password">Подтвердить пароль</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
        </div>
    </main>
</template>

<script>
export default {
    name: "Registration"
}
</script>

<style scoped>

</style>
