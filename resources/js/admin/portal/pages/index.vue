<template>

    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <router-link :to="{name:'properties'}" class="bg-gray-200 duration-500 hover:bg-gray-300 px-5 py-10 rounded-tl-3xl rounded-br-3xl flex justify-center items-center flex-col text-center">
            <div class="text-lg"> Properties </div>
            <div class="text-3xl mt-3"> 43124 </div>
        </router-link>
        <router-link :to="{name:'teams'}" class="bg-gray-200 duration-500 hover:bg-gray-300 px-5 py-10 rounded-tl-3xl rounded-br-3xl flex justify-center items-center flex-col text-center">
            <div class="text-lg"> Teams </div>
            <div class="text-3xl mt-3"> 43124 </div>
        </router-link>
        <router-link :to="{name:'blogs'}" class="bg-gray-200 duration-500 hover:bg-gray-300 px-5 py-10 rounded-tl-3xl rounded-br-3xl flex justify-center items-center flex-col text-center">
            <div class="text-lg"> Blogs </div>
            <div class="text-3xl mt-3"> 43124 </div>
        </router-link>
        <router-link :to="{name:'services'}" class="bg-gray-200 duration-500 hover:bg-gray-300 px-5 py-10 rounded-tl-3xl rounded-br-3xl flex justify-center items-center flex-col text-center">
            <div class="text-lg"> Services </div>
            <div class="text-3xl mt-3"> 43124 </div>
        </router-link>
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
