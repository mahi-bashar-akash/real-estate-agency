<template>
    <main class="w-full h-screen overflow-hidden flex items-start bg-[#1c252e]">
        <aside class="min-w-[290px] h-screen p-5 duration-500" :class="{ '-ms-[290px]' : isSidebarActive, 'ms-0' : !isSidebarActive }">
            <div class="text-center text-2xl p-3 text-white"> Admin Panel </div>
            <div class="overflow-y-auto h-[calc(100vh-96px)]">
                <router-link :to="{name:'analysis'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'analysis' , 'bg-transparent' : $route.name === 'analysis' }">
                    Analysis
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'properties'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'properties' , 'bg-transparent' : $route.name === 'properties' }">
                    Properties
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'agents'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'agents' , 'bg-transparent' : $route.name === 'agents' }">
                    Agents
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'blogs'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'blogs' , 'bg-transparent' : $route.name === 'blogs' }">
                    Blogs
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'services'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'services' , 'bg-transparent' : $route.name === 'services' }">
                    Services
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'customers'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'customers' , 'bg-transparent' : $route.name === 'customers' }">
                    Customers
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'orders'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'orders' , 'bg-transparent' : $route.name === 'orders' }">
                    Orders
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'reviews'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'reviews' , 'bg-transparent' : $route.name === 'reviews' }">
                    Reviews
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'chats'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'chats' , 'bg-transparent' : $route.name === 'chats' }">
                    Chats
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
                <router-link :to="{name:'emails'}" class="flex text-md justify-between items-center px-5 py-3 rounded-lg text-white duration-500 hover:bg-white/15 m-1" :class="{ 'bg-white/15' : $route.name === 'emails' , 'bg-transparent' : $route.name === 'emails' }">
                    Emails
                    <span>
                        <svg viewBox="0 0 24 24" class="size-[30px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Arrow / Caret_Right_SM">
                                    <path class="stroke-white" id="Vector" d="M11 9L14 12L11 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                </router-link>
            </div>
        </aside>
        <section class="p-5 h-screen w-full">
            <div class="w-full h-full bg-white rounded-3xl overflow-hidden">
                <div class="w-full flex justify-between items-center px-5 h-[70px]">
                    <div class="flex items-center gap-x-2">
                        <button type="button" class="bg-transparent duration-500 hover:bg-gray-300 outline-0 border-0 flex justify-center items-center cursor-pointer size-[45px] rounded-xl" @click="sidebarToggle()">
                            <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="stroke-[#1c252e]" d="M5 7H19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path class="stroke-[#1c252e]" d="M5 12L14 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path class="stroke-[#1c252e]" d="M5 17L19 17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-end items-center gap-x-2">
                        <button type="button" class="bg-transparent duration-500 size-[45px] hover:bg-gray-300 outline-0 border-0 flex justify-center items-center rounded-full" @click="fullscreen()">
                            <svg viewBox="0 0 24 24" class="size-[15px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="!isFullScreen">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="fill-[#1c252e]" d="M23 4C23 2.34315 21.6569 1 20 1H16C15.4477 1 15 1.44772 15 2C15 2.55228 15.4477 3 16 3H20C20.5523 3 21 3.44772 21 4V8C21 8.55228 21.4477 9 22 9C22.5523 9 23 8.55228 23 8V4Z"></path>
                                    <path class="fill-[#1c252e]" d="M23 16C23 15.4477 22.5523 15 22 15C21.4477 15 21 15.4477 21 16V20C21 20.5523 20.5523 21 20 21H16C15.4477 21 15 21.4477 15 22C15 22.5523 15.4477 23 16 23H20C21.6569 23 23 21.6569 23 20V16Z"></path>
                                    <path class="fill-[#1c252e]" d="M4 21H8C8.55228 21 9 21.4477 9 22C9 22.5523 8.55228 23 8 23H4C2.34315 23 1 21.6569 1 20V16C1 15.4477 1.44772 15 2 15C2.55228 15 3 15.4477 3 16V20C3 20.5523 3.44772 21 4 21Z"></path>
                                    <path class="fill-[#1c252e]" d="M1 8C1 8.55228 1.44772 9 2 9C2.55228 9 3 8.55228 3 8L3 4C3 3.44772 3.44772 3 4 3H8C8.55228 3 9 2.55228 9 2C9 1.44772 8.55228 1 8 1H4C2.34315 1 1 2.34315 1 4V8Z"></path>
                                </g>
                            </svg>
                            <svg viewBox="0 0 24 24" class="size-[15px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="isFullScreen">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="fill-[#1c252e]" d="M7 16L2 16C1.44772 16 1 15.5523 1 15C1 14.4477 1.44772 14 2 14L7 14C8.65685 14 10 15.3431 10 17V22C10 22.5523 9.55228 23 9 23C8.44772 23 8 22.5523 8 22V17C8 16.4477 7.55228 16 7 16Z"></path>
                                    <path class="fill-[#1c252e]" d="M10 2C10 1.44772 9.55229 1 9 1C8.44772 1 8 1.44772 8 2L8 7C8 7.55228 7.55228 8 7 8L2 8C1.44772 8 1 8.44771 1 9C1 9.55228 1.44772 10 2 10L7 10C8.65685 10 10 8.65685 10 7L10 2Z"></path>
                                    <path class="fill-[#1c252e]" d="M14 22C14 22.5523 14.4477 23 15 23C15.5523 23 16 22.5523 16 22V17C16 16.4477 16.4477 16 17 16H22C22.5523 16 23 15.5523 23 15C23 14.4477 22.5523 14 22 14H17C15.3431 14 14 15.3431 14 17V22Z"></path>
                                    <path class="fill-[#1c252e]" d="M14 7C14 8.65686 15.3431 10 17 10L22 10C22.5523 10 23 9.55228 23 9C23 8.44772 22.5523 8 22 8L17 8C16.4477 8 16 7.55229 16 7L16 2C16 1.44772 15.5523 1 15 1C14.4477 1 14 1.44772 14 2L14 7Z"></path>
                                </g>
                            </svg>
                        </button>
                        <div class="relative" id="profileDropdown">
                            <button type="button" class="bg-transparent duration-500 size-[45px] hover:bg-gray-300 outline-0 border-0 flex justify-center items-center rounded-full" @click="dropdownToggle()">
                                <svg class="fill-[#1c252e] size-[15px]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <circle cx="256" cy="114.526" r="114.526"></circle>
                                            </g>
                                        </g>
                                            <g>
                                            <g>
                                                <path d="M256,256c-111.619,0-202.105,90.487-202.105,202.105c0,29.765,24.13,53.895,53.895,53.895h296.421 c29.765,0,53.895-24.13,53.895-53.895C458.105,346.487,367.619,256,256,256z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <ul class="w-[150px] bg-white drop-shadow-2xl rounded-md overflow-hidden border border-gray-200 p-1 absolute end-0 mt-1" v-if="isDropdownActive" @click.stop>
                                <li>
                                    <a href="javascript:void(0)" class="decoration-0 flex text-md justify-start items-center px-3 py-2 w-full text-md bg-transparent duration-500 hover:bg-gray-300 rounded-md" @click="dropdownToggle()">
                                        <span class="me-2">
                                            <svg class="fill-[#1c252e] size-[20px]" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M 28.0117 27.3672 C 33.0508 27.3672 37.3867 22.8672 37.3867 17.0078 C 37.3867 11.2187 33.0274 6.9297 28.0117 6.9297 C 22.9961 6.9297 18.6367 11.3125 18.6367 17.0547 C 18.6367 22.8672 22.9961 27.3672 28.0117 27.3672 Z M 13.2930 49.0703 L 42.7305 49.0703 C 46.4101 49.0703 47.7226 48.0156 47.7226 45.9531 C 47.7226 39.9062 40.1523 31.5625 28.0117 31.5625 C 15.8477 31.5625 8.2774 39.9062 8.2774 45.9531 C 8.2774 48.0156 9.5898 49.0703 13.2930 49.0703 Z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="text-[#1c252e]">
                                            Profile
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="decoration-0 flex text-md justify-start items-center px-3 py-2 w-full text-md bg-transparent duration-500 hover:bg-gray-300 rounded-md" @click="dropdownToggle()">
                                        <span class="me-2">
                                            <svg class="size-[20px] fill-[#1c252e]" fill="#000000" viewBox="0 0 20 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <title>logout</title>
                                                    <path d="M0 9.875v12.219c0 1.125 0.469 2.125 1.219 2.906 0.75 0.75 1.719 1.156 2.844 1.156h6.125v-2.531h-6.125c-0.844 0-1.5-0.688-1.5-1.531v-12.219c0-0.844 0.656-1.5 1.5-1.5h6.125v-2.563h-6.125c-1.125 0-2.094 0.438-2.844 1.188-0.75 0.781-1.219 1.75-1.219 2.875zM6.719 13.563v4.875c0 0.563 0.5 1.031 1.063 1.031h5.656v3.844c0 0.344 0.188 0.625 0.5 0.781 0.125 0.031 0.25 0.031 0.313 0.031 0.219 0 0.406-0.063 0.563-0.219l7.344-7.344c0.344-0.281 0.313-0.844 0-1.156l-7.344-7.313c-0.438-0.469-1.375-0.188-1.375 0.563v3.875h-5.656c-0.563 0-1.063 0.469-1.063 1.031z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="text-[#1c252e]">
                                            Logout
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <router-view/>
            </div>
        </section>
    </main>
</template>

<script>

export default {
    data(){
        return {
            isFullScreen: false,
            isDropdownActive: false,
            isSidebarActive: false,
        }
    },
    mounted() {
        window.addEventListener("click", this.handleDropdownClose);
    },
    beforeUnmount() {
        window.removeEventListener("click", this.handleDropdownClose)
    },
    methods: {

        fullscreen() {
            this.isFullScreen = !this.isFullScreen;
            if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {
                if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        },

        // Toggle responsive dropdown
        dropdownToggle() {
            this.isDropdownActive = !this.isDropdownActive;
        },

        // Handle responsive dropdown as close
        handleDropdownClose() {
            if(!event.target.closest("#profileDropdown")) {
                this.isDropdownActive = false;
            }
        },

        sidebarToggle() {
            this.isSidebarActive = !this.isSidebarActive;
        }


    }
}

</script>
