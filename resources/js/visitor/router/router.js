import {createRouter, createWebHistory} from "vue-router";

import Layout from "../portal/layout/layout.vue";

    import Index from "../portal/pages/index.vue";
    import About from "../portal/pages/about.vue";

    import Teams from "../portal/pages/teams.vue";
    import TeamDetails from "../portal/pages/team-details.vue";

    import Blogs from "../portal/pages/blogs.vue";
    import BlogDetails from "../portal/pages/blog-details.vue";

    import Properties from "../portal/pages/properties.vue";
    import PropertyDetails from "../portal/pages/property-details.vue";

    import ServiceDetails from "../portal/pages/service-details.vue";

import AuthLayout from "../auth/layout/layout.vue";

    import SignIn from "../auth/pages/sign-in.vue";
    import SignUp from "../auth/pages/sign-up.vue";
    import Forgot from "../auth/pages/forgot.vue";
    import Reset from "../auth/pages/reset.vue";

import Chat from "../chat/chats.vue";

    const company_name = "Realer Living Solution";

const routes = [
    {path: '/', name: 'Layout', component: Layout,
        children: [
            {path: '', name: 'Index', component: Index, meta: {title: company_name + ' Home'}},
            {path: 'about', name: 'About', component: About, meta: {title: company_name + ' About'}},
            {path: 'teams', name: 'Teams', component: Teams, meta: {title: company_name + ' Teams'}},
            {path: 'team-details/:id', name: 'TeamDetails', component: TeamDetails, meta: {title: company_name + ' Team Details'}},
            {path: 'blogs', name: 'Blogs', component: Blogs, meta: {title: company_name + ' Blogs'}},
            {path: 'blog-details/:id', name: 'BlogDetails', component: BlogDetails, meta: {title: company_name + ' Blog Details'}},
            {path: 'properties', name: 'Properties', component: Properties, meta: {title: company_name + ' Properties'}},
            {path: 'property-details/:id', name: 'PropertyDetails', component: PropertyDetails, meta: {title: company_name + ' Property Details'}},
            {path: 'service-details/:id', name: 'ServiceDetails', component: ServiceDetails, meta: {title: company_name + ' Service Details'}},
        ]
    },
    {path: '/auth/', name: 'AuthLayout', component: AuthLayout,
        children: [
            {path: 'sign-in', name: 'SignIn', component: SignIn, meta: {title: company_name + ' Sign In'}},
            {path: 'sign-up', name: 'SignUp', component: SignUp, meta: {title: company_name + ' Sign Up'}},
            {path: 'forgot', name: 'Forgot', component: Forgot, meta: {title: company_name + ' Forgot'}},
            {path: 'reset', name: 'Reset', component: Reset, meta: {title: company_name + ' Reset'}},
        ]
    },
    {path: '/chat', name: 'Chat', component: Chat, meta: {title: company_name + ' Chat'}},
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
