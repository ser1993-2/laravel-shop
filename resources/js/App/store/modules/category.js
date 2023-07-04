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
        GET_CATEGORIES_BY_ALIAS({commit},alias) {
            axios.get('/api/category/' + alias + '/child')
                .then((response) => {
                    let categories = response.data;
                    commit('updateCategories',categories);
                })
                .catch((error) => {
                    commit('updateCategories',{});
                    router.push('/product/' + alias);
                })
        },
        GET_CATEGORY_BY_ALIAS({commit},alias) {
            axios.get('/api/category/' + alias)
                .then((response) => {
                    let category = response.data;
                    commit('updateCategory',category);
                })
                .catch((error) => {
                    commit('updateCategory',{});
                })
        },
    },
    mutations: {
        updateCategories(state,categories) {
            state.categories = categories;
        },
        updateCategory(state,category) {
            state.category = category;
        },
    },
    state: {
        categories : {},
        category : {},
    },
    getters: {
        getCategories(state) {
            return state.categories;
        },
        getCategory(state) {
            return state.category;
        },
    },
}
