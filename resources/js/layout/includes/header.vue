<template>

    <!-- Header -->
    <header class="w-full sticky top-0 start-0 end-0 z-40 bg-gray-200/50 backdrop-blur-lg">
        <div class="mx-auto lg:max-w-[1000px] xl:max-w-[1400px] px-4 py-4 sm:px-2 sm:py-0">

            <div class="w-full flex flex-wrap justify-between items-center sm:p-2 lg:px-5">
                <div class="w-1/2 lg:w-1/3">
                    <router-link :to="{name: 'Index'}" class="decoration-0 inline-block">
                        <img :src="'/images/logo.svg'" class="object-cover h-[40px]" alt="logo">
                    </router-link>
                </div>
                <div class="w-1/2 flex lg:hidden justify-end items-center">
                    <button type="button" class="outline-0 border-0 bg-transparent" @click="navbarToggle()">
                        <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M5 7H19" class="stroke-black" stroke-width="3" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M10 12L19 12" class="stroke-black" stroke-width="3" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M5 17L19 17" class="stroke-black" stroke-width="3" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="w-full sm:w-[280px] lg:w-auto p-5 top-0 bottom-0 h-screen lg:h-auto z-50 fixed lg:sticky bg-white lg:bg-transparent lg:flex justify-end items-center gap-x-3 font-medium duration-500" :class="{ '-start-[110%] sm:-start-[280px]' : !isSidebarActive, 'start-0' : isSidebarActive }">
                    <div class="flex justify-end items-center mb-5 lg:hidden">
                        <button type="button" class="outline-0 border-0 bg-transparent" @click="navbarToggle()">
                            <svg viewBox="0 0 24 24" class="size-[24px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="stroke-black" d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path class="stroke-black" d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <router-link :to="{name: 'Index'}" class="decoration-0 px-2 py-1 block lg:inline-block" :class="{ 'text-black' : $route.name !== 'Index', 'text-blue-500' : $route.name === 'Index' }" @click="navbarToggle()">
                        Home
                    </router-link>
                    <router-link :to="{name: 'About'}" class="decoration-0 px-2 py-1 block lg:inline-block" :class="{ 'text-black' : $route.name !== 'About', 'text-blue-500' : $route.name === 'About' }" @click="navbarToggle()">
                        About
                    </router-link>
                    <router-link :to="{name: 'Properties'}" class="decoration-0 px-2 py-1 block lg:inline-block" :class="{ 'text-black' : $route.name !== 'Properties', 'text-blue-500' : $route.name === 'Properties' }" @click="navbarToggle()">
                        Properties
                    </router-link>
                    <router-link :to="{name: 'Team'}" class="decoration-0 px-2 py-1 block lg:inline-block" :class="{ 'text-black' : $route.name !== 'Team', 'text-blue-500' : $route.name === 'Team' }" @click="navbarToggle()">
                        Team
                    </router-link>
                </div>
            </div>

        </div>
    </header>

</template>

<script>

export default {
    data(){
        return {
            isSidebarActive: false,
        }
    },
    mounted() {

    },
    methods: {

        navbarToggle() {
            if (window.innerWidth <= 1024) {
                this.isSidebarActive = !this.isSidebarActive;
            }
        }

    }
}

</script>
