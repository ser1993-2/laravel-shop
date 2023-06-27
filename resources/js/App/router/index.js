import { createRouter, createWebHistory } from 'vue-router'

import Main from "../components/Main.vue"

const routes = [
    {
        path: '/main',
        name: 'main',
        component: Main
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
