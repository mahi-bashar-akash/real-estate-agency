<template>
    <div class="w-full h-screen overflow-y-auto flex items-center justify-center bg-cover object-cover bg-center object-center p-3 relative before:absolute before:content-[''] before:inset-0 before:w-full before:h-full before:bg-black/35" :style="{ backgroundImage: 'url(/images/authentication.webp)' }">
        <div class="w-full mx-auto max-w-[470px] p-5 sm:p-10 bg-white/45 backdrop-blur-md shadow-[0_0_16px_#888888]">
            <div class="flex justify-center mb-5 flex-col items-center">
                <router-link :to="{name: 'SignIn'}">
                    <img :src="'/images/logo-icon.svg'" class="w-[70px]" alt="logo" loading="lazy" />
                </router-link>
                <div class="mt-2 text-[21px]"> Living Solution </div>
            </div>
            <router-view/>
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
