import {createRouter, createWebHistory} from "vue-router";

import AuthLayout from "../auth/layout/layout.vue";
import SignIn from "../auth/pages/sign-in.vue";

import portalLayout from "../portal/layout/layout.vue";
import dashboard from "../portal/pages/index.vue";
import properties from "../portal/pages/properties.vue";
import teams from "../portal/pages/teams.vue";
import blogs from "../portal/pages/blogs.vue";
import services from "../portal/pages/services.vue";

const routes = [
    {
        path: '/admin/auth', name: 'AuthLayout', component: AuthLayout,
        children: [
            { path: 'sign-in', name: 'SignIn', component: SignIn },
        ]
    },
    {
        path: '/admin', name: 'portalLayout', component: portalLayout,
        children: [
            {path: '', name: 'dashboard', component: dashboard},
            {path: 'properties', name: 'properties', component: properties},
            {path: 'teams', name: 'teams', component: teams},
            {path: 'blogs', name: 'blogs', component: blogs},
            {path: 'services', name: 'services', component: services},
        ]
    },
];

const router = createRouter({
    history: createWebHistory(), routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {el: to.hash, behavior: 'smooth'};
        } else {
            return {top: 0, behavior: 'smooth'};
        }
    }
});

export default router;
