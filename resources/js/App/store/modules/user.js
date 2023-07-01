export default {
    actions: {
        getUser(ctx) {
            axios.get('/api/user')
                .then((response) => {
                    let user = response.data;
                    ctx.commit('updateUser',user);
                    ctx.commit('updateAuth', !!user);
                })
                .catch((error) => {
                    ctx.commit('updateUser',{});
                    ctx.commit('updateAuth',false);
                })
        },
        login(ctx,user) {
            axios.post('/api/user/login' , user)
                .then((response) => {
                    ctx.dispatch('getUser');
                }).catch((error) => {
                    ctx.commit('updateErrors', error.response.data.errors);
            })
        },
        logout(ctx) {
            axios.get('/api/user/logout')
                .then((response) => {
                    ctx.commit('updateUser',{});
                    ctx.commit('updateAuth',false);
                }).catch((error) => {
                    ctx.commit('updateUser', {});
                    ctx.commit('updateAuth',false);
            })
        },
    },
    mutations: {
        updateUser(state,user) {
            state.user = user ? user : {};
        },
        updateAuth(state,isAuth) {
            state.isAuth = isAuth;
        },
        updateErrors(state,errors) {
            state.errors = errors;
        }
    },
    state: {
        user : {},
        isAuth : false,
        errors: {},
    },
    getters: {
        getCurrentUser(state) {
            return state.user;
        },
        getIsAuth(state) {
            return state.isAuth;
        },
        getErrors(state) {
            return state.errors;
        }
    },
}
