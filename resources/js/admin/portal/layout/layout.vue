<template>
    <main class="w-full flex items-start">
        <aside class="min-w-[290px] border-e border-e-gray-300 h-screen">
            <div class="w-full flex justify-center items-center py-3">
                <h1 class="font-semibold text-2xl text-gray-700"> Admin Panel </h1>
            </div>
            <div class="w-full p-3">
                <router-link :to="{name:'dashboard'}" class="decoration-0 block text-md px-5 py-3 bg-transparent duration-500 hover:bg-gray-300 rounded-md hover:text-blue-950 mb-1"
                    :class="{'text-blue-950 bg-gray-300' : $route.name === 'dashboard', 'text-gray-600' : $route.name !== 'dashboard'}">
                    Dashboard
                </router-link>
                <router-link :to="{name:'properties'}" class="decoration-0 block text-md px-5 py-3 bg-transparent duration-500 hover:bg-gray-300 rounded-md hover:text-blue-950 mb-1"
                    :class="{'text-blue-950 bg-gray-300' : $route.name === 'properties', 'text-gray-600' : $route.name !== 'properties'}">
                    Properties
                </router-link>
                <router-link :to="{name:'teams'}" class="decoration-0 block text-md px-5 py-3 bg-transparent duration-500 hover:bg-gray-300 rounded-md hover:text-blue-950 mb-1"
                    :class="{'text-blue-950 bg-gray-300' : $route.name === 'teams', 'text-gray-600' : $route.name !== 'teams'}">
                    Teams
                </router-link>
                <router-link :to="{name:'blogs'}" class="decoration-0 block text-md px-5 py-3 bg-transparent duration-500 hover:bg-gray-300 rounded-md hover:text-blue-950 mb-1"
                    :class="{'text-blue-950 bg-gray-300' : $route.name === 'blogs', 'text-gray-600' : $route.name !== 'blogs'}">
                    Blogs
                </router-link>
                <router-link :to="{name:'services'}" class="decoration-0 block text-md px-5 py-3 bg-transparent duration-500 hover:bg-gray-300 rounded-md hover:text-blue-950 mb-1"
                    :class="{'text-blue-950 bg-gray-300' : $route.name === 'services', 'text-gray-600' : $route.name !== 'services'}">
                    Services
                </router-link>
            </div>
        </aside>
        <section class="min-w-[calc(100%-290px)] p-5">
            <router-view/>
        </section>
    </main>
</template>

<script>

export default {
    data(){
        return {

        }
    },
    mounted() {

    },
    methods: {

    }
}

</script>
