import router from '../../router'

export default {
    actions: {
        GET_CATEGORIES({commit}) {
            axios.get('/api/category')
                .then((response) => {
                    let categories = response.data;
                    commit('updateCategories',categories);
                })
                .catch((error) => {
                    commit('updateCategories',{});
                })
        },
        GET_CATEGORIES_BY_ALIAS({commit,dispatch},alias) {
            axios.get('/api/category/' + alias)
                .then((response) => {
                    let categories = response.data;
                    commit('updateCategories',categories);
                })
                .catch((error) => {
                    commit('updateCategories',{});
                    router.push('/product/' + alias);
                })
        },
    },
    mutations: {
        updateCategories(state,categories) {
            state.categories = categories;
        },
    },
    state: {
        categories : {},
    },
    getters: {
        getCategories(state) {
            return state.categories;
        },
    },
}
