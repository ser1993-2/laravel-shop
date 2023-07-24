export default {
    actions: {
        GET_FILTER_BY_CATEGORY_ALIAS({commit,state},category_alias ) {
            axios.get('/api/product/' + category_alias + '/filter')
                .then((response) => {
                    let filter = response.data;
                    commit('updateFilter',filter);
                })
                .catch((error) => {
                    commit('updateFilter',{});
                })
        },
    },
    mutations: {
        updateFilter(state,filter) {
            state.filter = filter;
        },
    },
    state: {
        filter : {},
    },
    getters: {
        getFilter(state) {
            return state.filter;
        },
    },
}
