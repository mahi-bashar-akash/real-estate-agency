import {createRouter, createWebHistory} from "vue-router";

import authLayout from "../auth/layout/layout.vue";
import SignIn from "../auth/pages/sign-in.vue";
import Forgot from "../auth/pages/forgot.vue";
import Reset from "../auth/pages/reset.vue";
import Verification from "../auth/pages/verification.vue";

import portalLayout from "../portal/layout/layout.vue";
import analysis from "../portal/pages/analysis.vue";

import agents from "../portal/pages/agent/list.vue";
import manageAgent from "../portal/pages/agent/manage.vue";
import viewAgent from "../portal/pages/agent/view.vue";

import blogs from "../portal/pages/blog/list.vue";
import manageBlog from "../portal/pages/blog/manage.vue";
import viewBlog from "../portal/pages/blog/view.vue";

import properties from "../portal/pages/property/list.vue";
import manageProperty from "../portal/pages/property/manage.vue";
import viewProperty from "../portal/pages/property/view.vue";

import services from "../portal/pages/service/list.vue";
import manageService from "../portal/pages/service/manage.vue";
import viewService from "../portal/pages/service/view.vue";

import chats from "../portal/pages/chats.vue";
import customers from "../portal/pages/customer/list.vue";
import viewCustomer from "../portal/pages/customer/view.vue";
import emails from "../portal/pages/emails.vue";
import orders from "../portal/pages/customer/orders.vue";
import reviews from "../portal/pages/customer/reviews.vue";
import profile from "../portal/pages/profile.vue";

const title = "Admin Panel - ";

const routes = [
    {
        path: '/admin/auth', name: 'authLayout', component: authLayout,
        children: [
            { path: 'sign-in', name: 'signIn', component: SignIn, meta: { title: title + 'Sign In' } },
            { path: 'forgot', name: 'forgot', component: Forgot, meta: { title: title + 'Forgot' } },
            { path: 'reset', name: 'reset', component: Reset, meta: { title: title + 'Reset' } },
            { path: 'verification', name: 'verification', component: Verification, meta: { title: title + 'Verification' } },
        ]
    },
    {
        path: '/admin', name: 'portalLayout', component: portalLayout,
        children: [
            {path: '', name: 'analysis', component: analysis, meta: { title: title + 'Analysis' } },
            {path: 'chats', name: 'chats', component: chats, meta: { title: title + 'Chats' } },
            {path: 'emails', name: 'emails', component: emails, meta: { title: title + 'Emails' } },
            {path: 'profile', name: 'profile', component: profile, meta: { title: title + 'Profile' } },

            // Agent
            {path: 'agents', name: 'agents', component: agents, meta: { title: title + 'Agents' } },
            {path: 'agent/manage/:id', name: 'manageAgent', component: manageAgent, meta: { title: title + 'Manage Agent' } },
            {path: 'agent/view/:id', name: 'viewAgent', component: viewAgent, meta: { title: title + 'View Agent' } },

            // Blog
            {path: 'blogs', name: 'blogs', component: blogs, meta: { title: title + 'Blogs' } },
            {path: 'blog/manage/:id', name: 'manageBlog', component: manageBlog, meta: { title: title + 'Manage Blog' } },
            {path: 'blog/view/:id', name: 'viewBlog', component: viewBlog, meta: { title: title + 'View Blog' } },

            // Property
            {path: 'properties', name: 'properties', component: properties, meta: { title: title + 'Properties' } },
            {path: 'property/manage/:id', name: 'manageProperty', component: manageProperty, meta: { title: title + 'Manage Property' } },
            {path: 'property/view/:id', name: 'viewProperty', component: viewProperty, meta: { title: title + 'View Property' } },

            // Service
            {path: 'services', name: 'services', component: services, meta: { title: title + 'Services' } },
            {path: 'service/manage/:id', name: 'manageService', component: manageService, meta: { title: title + 'Manage Service' } },
            {path: 'service/view/:id', name: 'viewService', component: viewService, meta: { title: title + 'View Service' } },

            // Customer
            {path: 'customers/list', name: 'customers', component: customers, meta: { title: title + 'Customer List' } },
            {path: 'customer/view/:id', name: 'viewCustomer', component: viewCustomer, meta: { title : title + 'View Customer'} },
            {path: 'customers/order', name: 'orders', component: orders, meta: { title: title + 'Customer Order List' } },
            {path: 'customers/review', name: 'reviews', component: reviews, meta: { title: title + 'Customer Review List' } },

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

router.beforeEach((to, from, next) => {
    const userType = localStorage.getItem("user_type");
    const isAuthenticated = userType === "admin";

    if (to.path.startsWith("/admin/auth")) {
        if (isAuthenticated) { next({ name: "analysis" }); } else { next(); }
    } else if (to.path.startsWith("/admin")) {
        if (!isAuthenticated) { next({ name: "signIn" }); } else { next(); }
    } else {
        next();
    }
});

export default router;
