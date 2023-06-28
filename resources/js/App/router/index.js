import { createRouter, createWebHistory } from 'vue-router'

import Main from "../components/Main.vue"
import Category from "../components/Category.vue";

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main
    },
    {
        path: '/category',
        name: 'category',
        component: Category
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
