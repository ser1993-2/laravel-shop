import { createRouter, createWebHistory } from 'vue-router'

import Main from "../components/Main.vue"
import Category from "../components/Category.vue";
import Login from "../components/Auth/Login.vue";
import Registration from "../components/Auth/Registration.vue";

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/registration',
        name: 'registration',
        component: Registration
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
