import { createStore } from 'vuex'
import user from "./modules/user.js";
import category from "./modules/category.js";
import product from "./modules/product.js";
import basket from "./modules/basket.js";
import productFilter from "./modules/productFilter.js";

const store = createStore({
    modules:{
        user,
        category,
        product,
        basket,
        productFilter
    }
});

export default store;


