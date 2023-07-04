import { createRouter, createWebHistory } from 'vue-router'

import Main from "../components/Main.vue"
import Category from "../components/Category.vue";
import LoginForm from "../components/Auth/LoginForm.vue";
import RegisterForm from "../components/Auth/RegisterForm.vue";
import Product from "../components/Product.vue";

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main
    },
    {
        path: '/login',
        name: 'login',
        component: LoginForm
    },
    {
        path: '/register',
        name: 'register',
        component: RegisterForm
    },
    {
        path: '/category',
        name: 'category',
        component: Category
    },
    {
        path: '/product/:alias',
        name: 'product',
        component: Product
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
