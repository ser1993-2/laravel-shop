export default {
    actions: {
        GET_BASKET({commit} ) {
            axios.get('/api/basket/')
                .then((response) => {
                    let basket = response.data;
                    commit('updateBasket',basket);
                })
                .catch((error) => {
                    commit('updateBasket',{});
                })
        },
        GET_BASKET_PRODUCTS({commit}) {
            axios.get('/api/basket/product')
                .then((response) => {
                    let basketProducts = response.data;
                    commit('updateBasketProducts',basketProducts);
                })
                .catch((error) => {
                    commit('updateBasketProducts',{});
                })
        },
        DELETE_BASKET_PRODUCT({commit,dispatch},product_id) {
            let data = { 'product_id' : product_id };
            axios.delete('/api/basket/product/' + product_id)
                .then((response) => {
                    dispatch('GET_BASKET_PRODUCTS');
                })
                .catch((error) => {
                    dispatch('GET_BASKET_PRODUCTS');
                })
        },

    },
    mutations: {
        updateBasket(state,basket) {
            state.basket = basket;
        },
        updateBasketProducts(state,basketProducts) {
            state.basketProducts = basketProducts;
        },
    },
    state: {
        basket : {},
        basketProducts : {},
    },
    getters: {
        getBasket(state) {
            return state.basket;
        },
        getBasketProducts(state) {
            return state.basketProducts;
        },
    },
}
