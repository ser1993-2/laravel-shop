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
