<template>
    <Profile v-if="isAuth"/>
    <SignIn v-if="!isAuth"/>
</template>

<script>

import SignIn from "./Auth/SignIn.vue";
import Profile from "./Auth/Profile.vue";

export default {
    name: "Auth",
    components: {
        SignIn,
        Profile
    },
    computed: {
        isAuth() {
            return this.$store.getters.getIsAuth;
        },
    },
    mounted() {
        this.$store.dispatch('getUser');
    }
}
</script>

<style scoped>

</style>
