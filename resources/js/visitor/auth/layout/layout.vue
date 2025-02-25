<template>

    <div class="w-full h-screen flex justify-center items-center p-3">
        <div class="mx-auto w-full max-w-[500px] border font-medium">
            <img :src="'/images/authentication-wallpaper.jpg'" class="w-full h-[200px] object-cover bg-cover object-center bg-center" alt="authentication-bg" />
            <div class="p-10">
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
