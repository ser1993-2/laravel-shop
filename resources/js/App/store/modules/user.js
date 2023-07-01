export default {
    actions: {
        getUser({commit}) {
            axios.get('/api/user')
                .then((response) => {
                    let user = response.data;
                    commit('updateUser',user);
                    commit('updateAuth', !!user);
                })
                .catch((error) => {
                    commit('updateUser',{});
                    commit('updateAuth',false);
                })
        },
        login({commit,dispatch},user) {
            axios.post('/api/user/login' , user)
                .then((response) => {
                    dispatch('getUser');
                }).catch((error) => {
                    commit('updateErrors', error.response.data.errors);
            })
        },
        logout({commit}) {
            axios.get('/api/user/logout')
                .finally(() => {
                    commit('updateUser',{});
                    commit('updateAuth',false);
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
