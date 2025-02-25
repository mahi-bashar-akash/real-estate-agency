<template>
    <div class="w-full h-screen overflow-y-auto flex items-center justify-center bg-cover object-cover bg-center object-center p-3 relative before:absolute before:content-[''] before:inset-0 before:w-full before:h-full before:bg-black/35" :style="{ backgroundImage: 'url(/images/authentication.webp)' }">
        <router-view/>
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
