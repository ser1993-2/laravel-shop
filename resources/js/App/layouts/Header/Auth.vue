<template>

    <User v-if="!user"/>
    <Login v-if="user"/>
</template>

<script>

import Login from "./Auth/Login.vue";
import User from "./Auth/User.vue";

export default {
    name: "Auth",
    components: {
        Login,
        User
    },
    data() {
        return {
            user: null,
        }
    },
    created: function () {
        this.getUser();
    },
    methods: {
        getUser() {
            axios.get('/api/user')
                .then((response) => {
                this.user = response.data;
            })
        }
    },
}
</script>

<style scoped>

</style>
