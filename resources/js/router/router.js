import {createRouter, createWebHistory} from "vue-router";

import Layout from "../layout/layout.vue";
import Index from "../pages/index.vue";
import About from "../pages/about.vue";
import Team from "../pages/team.vue";
import TeamDetails from "../pages/team-details.vue";
import BlogDetails from "../pages/blog-details.vue";
import Properties from "../pages/properties.vue";
import PropertyDetails from "../pages/property-details.vue";

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
