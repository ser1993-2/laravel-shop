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
                .finally(() => {
                    commit('updateCategoryAliasInFilterRequest', category_alias);
                })
        },
    },
    mutations: {
        updateFilter(state,filter) {
            state.filter = filter;
        },
        updateCategoryAliasInFilterRequest(state,category_alias) {
            state.filterRequest.category_alias = category_alias;
        },
    },
    state: {
        filter : {},
        filterRequest : {
            category_alias : '',
            price : {},
        },
    },
    getters: {
        getFilter(state) {
            return state.filter;
        },
        getFilterRequest(state) {
            return state.filterRequest;
        },
    },
}
