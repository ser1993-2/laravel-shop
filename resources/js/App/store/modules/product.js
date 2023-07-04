export default {
    actions: {
        GET_PRODUCTS_BY_CATEGORY_ALIAS({commit},category_alias) {
            axios.get('/api/product/' + category_alias)
                .then((response) => {
                    let products = response.data;
                    commit('updateProducts',products);
                })
                .catch((error) => {
                    commit('updateProducts',{});
                })
        },
    },
    mutations: {
        updateProducts(state,products) {
            state.products = products;
        },
    },
    state: {
        products : {},
    },
    getters: {
        getProducts(state) {
            return state.products;
        },
    },
}
