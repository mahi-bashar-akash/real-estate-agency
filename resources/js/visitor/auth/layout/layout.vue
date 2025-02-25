<template>

    <div class="w-full h-screen flex justify-center items-center p-3 object-cover bg-cover object-center bg-center relative before:absolute before:content-[''] before:inset-0 before:w-full before:h-full before:bg-black/35" :style="{ backgroundImage: 'url(/images/authentication-wallpaper.jpg)' }">
        <div class="mx-auto w-full max-w-[500px] font-medium bg-white/45 backdrop-blur-2xl">
            <div class="p-10">
                <div class="flex justify-center mb-5 flex-col items-center">
                    <router-link :to="{name: 'Index'}">
                        <img :src="'/images/logo-icon.svg'" class="w-[70px]" alt="logo" loading="lazy" />
                    </router-link>
                    <div class="mt-2 text-[21px]"> Living Solution </div>
                </div>
                <router-view/>
            </div>
        </div>
    </div>

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
