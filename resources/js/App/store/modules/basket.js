export default {
    actions: {
        GET_BASKET({commit},category_alias ) {
            axios.get('/api/basket/')
                .then((response) => {
                    let basket = response.data;
                    commit('updateBasket',basket);
                })
                .catch((error) => {
                    commit('updateBasket',{});
                })
        },

    },
    mutations: {
        updateBasket(state,basket) {
            state.basket = basket;
        },
    },
    state: {
        basket : {},
    },
    getters: {
        getBasket(state) {
            return state.basket;
        },
    },
}
