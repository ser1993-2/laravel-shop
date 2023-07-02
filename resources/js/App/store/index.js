import { createStore } from 'vuex'
import user from "./modules/user.js";
import category from "./modules/category.js";

const store = createStore({
    modules:{
        user,
        category
    }
});

export default store;


