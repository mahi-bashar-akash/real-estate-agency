<template>

    <div class="h-[30px]"></div>

    <section class="w-full">
        <div class="mx-auto lg:max-w-[1000px] xl:max-w-[1400px] py-2 sm:px-7 sm:py-0">

            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full sm:w-1/2 lg:w-1/3 pb-2 md:pb-4 px-2">
                    <label for="keyword" hidden="hidden"> keyword </label>
                    <div class="relative w-full">
                        <input type="text" id="keyword" placeholder="Search here..." name="keyword" class="text-[13px] h-[42px] rounded-md w-full outline-0 border border-gray-300 focus-visible:border-blue-900 duration-500 ps-10 pe-3 py-2" required autocomplete="off">
                        <div class="absolute top-0 bottom-0 start-0 flex justify-center items-center ps-2">
                            <svg viewBox="0 0 24 24" class="size-[24px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path class="stroke-gray-400" d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 pb-2 md:pb-4 px-2">
                    <label for="sort" hidden="hidden">Sort</label>
                    <div class="w-full relative">
                        <select name="sort" id="sort" class="text-[13px] h-[42px] rounded-md w-full outline-0 border border-gray-300 focus-visible:border-blue-900 duration-500 px-5 appearance-none py-2" required autocomplete="off">
                            <option value=""> Default </option>
                            <option value=""> A to Z </option>
                            <option value=""> Z to A </option>
                        </select>
                        <div class="absolute top-0 bottom-0 end-0 h-full flex justify-center items-center pointer-events-none pe-2">
                            <svg viewBox="0 0 24 24" class="size-[24px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Arrow / Caret_Down_SM">
                                        <path id="Vector" d="M15 11L12 14L9 11" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 text-center gap-5 px-3">

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-1.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Samuel Palmer
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent, Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}"
                                     class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>

                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-2.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Vincent Fuller
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-3.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Brittany Watkins
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-4.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Michelle Ramirez
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-6.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Jose Delgado
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-7.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Ana Beltran
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-8.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Maria Villalobos
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

                <div class="w-full rounded-xl overflow-hidden border border-transparent [background:linear-gradient(45deg,#fff,theme(colors.white)_50%,#fff)_padding-box,conic-gradient(from_var(--border-angle),theme(colors.gray.300)_80%,theme(colors.indigo.500)_86%,theme(colors.indigo.300)_90%,theme(colors.indigo.500)_94%,theme(colors.gray.300))_border-box] animate-border" style="animation: rotate-border 4s linear infinite;">
                    <div class="w-full bg-white pb-5">
                        <div class="py-5">
                            <img :src="'/images/agent-9.jpg'" class="rounded-full size-[120px] mx-auto" alt="profile">
                        </div>
                        <div class="mb-2 text-[18px] text-center text-blue-500 px-3">
                            Nicholas Javier
                        </div>
                        <div class="mb-5 text-[13px] text-center text-gray-600 px-3"> 5 Properties </div>
                        <div class="text-center text-gray-400 text-[14px] px-10 mb-5">
                            Company Agent , Modern House Real Estate
                        </div>
                        <router-link :to="{name: 'TeamDetails',params:{id:'1'}}" class="decoration-0 text-blue-600 duration-500 hover:text-blue-900">
                            View Profile
                        </router-link>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="my-10 flex justify-center items-center gap-x-2">
                <a href="javascript:void(0)" class="size-[35px] text-[13px] text-gray-500 duration-500 hover:bg-blue-700 font-medium hover:text-white flex justify-center items-center rounded-full shadow-[0_0_3px_0_#888888]">
                    1
                </a>
                <a href="javascript:void(0)" class="size-[35px] text-[13px] text-gray-500 duration-500 hover:bg-blue-700 font-medium hover:text-white flex justify-center items-center rounded-full shadow-[0_0_3px_0_#888888]">
                    2
                </a>
                <a href="javascript:void(0)" class="size-[35px] text-[13px] text-gray-500 duration-500 hover:bg-blue-700 font-medium hover:text-white flex justify-center items-center rounded-full shadow-[0_0_3px_0_#888888]">
                    3
                </a>
                <a href="javascript:void(0)" class="size-[35px] text-[13px] text-gray-500 duration-500 hover:bg-blue-700 font-medium hover:text-white flex justify-center items-center rounded-full shadow-[0_0_3px_0_#888888]">
                    4
                </a>
                <a href="javascript:void(0)" class="size-[35px] text-[13px] text-gray-500 duration-500 hover:bg-blue-700 font-medium hover:text-white flex justify-center items-center rounded-full shadow-[0_0_3px_0_#888888]">
                    5
                </a>
            </div>

        </div>
    </section>

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
