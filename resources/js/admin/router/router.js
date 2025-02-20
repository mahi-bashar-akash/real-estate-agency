import {createRouter, createWebHistory} from "vue-router";

import AuthLayout from "../auth/layout/layout.vue";
import SignIn from "../auth/pages/sign-in.vue";

import portalLayout from "../portal/layout/layout.vue";
import analysis from "../portal/pages/analysis.vue";
import agents from "../portal/pages/agents.vue";
import blogs from "../portal/pages/blogs.vue";
import chats from "../portal/pages/chats.vue";
import customers from "../portal/pages/customers.vue";
import emails from "../portal/pages/emails.vue";
import orders from "../portal/pages/orders.vue";
import properties from "../portal/pages/properties.vue";
import reviews from "../portal/pages/reviews.vue";
import services from "../portal/pages/services.vue";

const title = "Admin Panel - ";

const routes = [
    {
        path: '/admin/auth', name: 'AuthLayout', component: AuthLayout,
        children: [
            { path: 'sign-in', name: 'SignIn', component: SignIn, meta: { title: 'Sign In' } },
        ]
    },
    {
        path: '/admin', name: 'portalLayout', component: portalLayout,
        children: [
            {path: '', name: 'analysis', component: analysis, meta: { title: title + 'Analysis' } },
            {path: 'agents', name: 'agents', component: agents, meta: { title: title + 'Agents' } },
            {path: 'blogs', name: 'blogs', component: blogs, meta: { title: title + 'Blogs' } },
            {path: 'chats', name: 'chats', component: chats, meta: { title: title + 'Chats' } },
            {path: 'customers', name: 'customers', component: customers, meta: { title: title + 'Customers' } },
            {path: 'emails', name: 'emails', component: emails, meta: { title: title + 'Emails' } },
            {path: 'orders', name: 'orders', component: orders, meta: { title: title + 'Orders' } },
            {path: 'properties', name: 'properties', component: properties, meta: { title: title + 'Properties' } },
            {path: 'reviews', name: 'reviews', component: reviews, meta: { title: title + 'Reviews' } },
            {path: 'services', name: 'services', component: services, meta: { title: title + 'Services' } },
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
