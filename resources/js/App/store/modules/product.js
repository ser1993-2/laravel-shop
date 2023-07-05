export default {
    actions: {
        GET_PRODUCTS_BY_CATEGORY_ALIAS({commit,state},category_alias ) {
            axios.get('/api/product/' + category_alias + '?page=' + state.page)
                .then((response) => {
                    let products = response.data;
                    commit('updateProducts',products);
                })
                .catch((error) => {
                    commit('updateProducts',{});
                })
        },
        SET_PAGE({commit,dispatch},page ) {
            commit('updatePage',page);
        }
    },
    mutations: {
        updateProducts(state,products) {
            state.products = products;
        },
        updatePage(state,page) {
            state.page = page;
        },
    },
    state: {
        products : {},
        page : 1,
    },
    getters: {
        getProducts(state) {
            return state.products;
        },
    },
}
