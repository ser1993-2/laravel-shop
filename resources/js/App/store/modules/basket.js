export default {
    actions: {
        GET_BASKET({commit} ) {
            axios.get('/api/basket/')
                .then((response) => {
                    let basket = response.data;
                    commit('updateBasket',basket);
                    commit('updateIsOrderButton',true);
                })
                .catch((error) => {
                    commit('updateBasket',{});
                    commit('updateIsOrderButton',true);
                })
        },
        GET_BASKET_PRODUCTS({commit}) {
            axios.get('/api/basket/product')
                .then((response) => {
                    let basketProducts = response.data;
                    commit('updateBasketProducts',basketProducts);
                    commit('updateIsOrderButton',true);
                })
                .catch((error) => {
                    commit('updateBasketProducts',{});
                    commit('updateIsOrderButton',true);
                })
        },
        DELETE_BASKET_PRODUCT({commit,dispatch},product_id) {
            commit('updateIsOrderButton',false);

            axios.delete('/api/basket/product/' + product_id)
                .then((response) => {
                    dispatch('GET_BASKET_PRODUCTS');
                })
                .catch((error) => {
                    dispatch('GET_BASKET_PRODUCTS');
                })
        },

        UPDATE_BASKET_PRODUCT({commit,dispatch},basket_product) {
            commit('updateIsOrderButton',false);

            if (basket_product.quantity <= 0) {
                dispatch('DELETE_BASKET_PRODUCT',basket_product.id);
            } else {
                axios.put('/api/basket/product/' + basket_product.id , basket_product)
                    .then((response) => {
                        dispatch('GET_BASKET_PRODUCTS');
                    })
                    .catch((error) => {
                        dispatch('GET_BASKET_PRODUCTS');
                    })
            }

        },
        ADD_BASKET_PRODUCT({commit,dispatch},product_id) {
            let data = { 'product_id' : product_id };
            axios.post('/api/basket/product' , data)
                .then((response) => {
                    dispatch('GET_BASKET');
                })
                .catch((error) => {
                    dispatch('GET_BASKET');
                })
        }

    },
    mutations: {
        updateBasket(state,basket) {
            state.basket = basket;
        },
        updateBasketProducts(state,basketProducts) {
            state.basketProducts = basketProducts;
        },
        updateIsOrderButton(state,isOrderButton) {
            state.isOrderButton = isOrderButton;
        },
    },
    state: {
        basket : {},
        basketProducts : {},
        isOrderButton : true,
    },
    getters: {
        getBasket(state) {
            return state.basket;
        },
        getBasketProducts(state) {
            return state.basketProducts;
        },
        getIsOrderButton(state) {
            return state.isOrderButton;
        },
    },
}
