<template>

    <div class="w-full h-[calc(100vh-120px)] py-5 overflow-y-auto px-8 scrollbar">

        <div class="mx-auto max-w-[850px]">

            <div class="mb-3 w-full flex justify-center">
                <img :src="'/images/agent-4.jpg'" class="size-[200px] flex bg-gray-200 rounded-full justify-center items-center text-[21px]" alt="agent" />
            </div>
            <div class="mb-3 w-full bg-gray-200 rounded-xl p-5">
                <div class="block mb-1 w-full"> Full Name </div>
                <div class="text-gray-700 text-[14px]"> John Doe </div>
            </div>
            <div class="mb-3 w-full bg-gray-200 rounded-xl p-5">
                <div class="block mb-1 w-full"> Full Name </div>
                <div class="text-gray-700 text-[14px]"> johnDoe@gmail.com </div>
            </div>
            <div class="mb-3 w-full bg-gray-200 rounded-xl p-5">
                <div class="block mb-1 w-full"> Phone Number </div>
                <div class="text-gray-700 text-[14px]"> 123456789 </div>
            </div>
            <div class="w-full bg-gray-200 rounded-xl p-5">
                <div class="block mb-1 w-full"> Present Address </div>
                <div class="text-gray-700 text-[14px]"> 4936 N Broadway St, Chicago, IL 60640, USA </div>
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
