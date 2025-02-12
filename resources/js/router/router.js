import {createRouter, createWebHistory} from "vue-router";

import Layout from "../portal/layout/layout.vue";
    import Index from "../portal/pages/index.vue";
    import About from "../portal/pages/about.vue";
    import Team from "../portal/pages/team.vue";
    import TeamDetails from "../portal/pages/team-details.vue";
    import BlogDetails from "../portal/pages/blog-details.vue";
    import Properties from "../portal/pages/properties.vue";
    import PropertyDetails from "../portal/pages/property-details.vue";

import AuthLayout from "../auth/layout/layout.vue";
    import SignIn from "../auth/pages/sign-in.vue";
    import SignUp from "../auth/pages/sign-up.vue";
    import Forgot from "../auth/pages/forgot.vue";
    import Reset from "../auth/pages/reset.vue";

const routes = [
    {path: '/', name: 'Layout', component: Layout,
        children: [
            {path: '', name: 'Index', component: Index},
            {path: 'about', name: 'About', component: About},
            {path: 'team', name: 'Team', component: Team},
            {path: 'team-details', name: 'TeamDetails', component: TeamDetails},
            {path: 'blog-details', name: 'BlogDetails', component: BlogDetails},
            {path: 'properties', name: 'Properties', component: Properties},
            {path: 'property-details', name: 'PropertyDetails', component: PropertyDetails},
            {path: 'auth/', name: 'AuthLayout', component: AuthLayout,
                children: [
                    {path: 'sign-in', name: 'SignIn', component: SignIn},
                    {path: 'sign-up', name: 'SignUp', component: SignUp},
                    {path: 'forgot', name: 'Forgot', component: Forgot},
                    {path: 'reset', name: 'Reset', component: Reset},
                ]
            }
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
