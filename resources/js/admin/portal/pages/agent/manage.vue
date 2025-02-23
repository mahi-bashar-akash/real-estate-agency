<template>

    <form @submit.prevent="manageApi()" class="w-full h-[calc(100vh-120px)] py-5 overflow-y-auto px-8 scrollbar">
        <div class="mx-auto max-w-[850px]">
            <div class="mb-3 w-full flex justify-center">
                <label for="upload-thumbnail" class="size-[250px] flex bg-gray-200 rounded-full justify-center items-center text-[21px] cursor-pointer">
                    <input type="file" name="upload-thumbnail" id="upload-thumbnail" hidden="hidden">
                    Upload
                </label>
            </div>
            <div class="mb-3 w-full">
                <label for="full-name" class="block mb-1 w-full"> Full Name: </label>
                <input id="full-name" type="text" name="full-name" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="email" class="block mb-1 w-full"> Email: </label>
                <input id="email" type="email" name="email" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="password" class="block mb-1 w-full"> Password: </label>
                <input id="password" type="password" name="password" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="password-confirmation" class="block mb-1 w-full"> Password Confirmation: </label>
                <input id="password-confirmation" type="password" name="password-confirmation" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="phone-number" class="block mb-1 w-full"> Phone Number: </label>
                <input id="phone-number" type="text" name="phone-number" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="present-address" class="block mb-1 w-full"> Present Address: </label>
                <input id="present-address" type="text" name="present-address" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="flex justify-end items-center gap-x-2">
                <router-link :to="{name:'properties'}" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-gray-200 duration-500 text-gray-700 hover:bg-gray-700 hover:text-white rounded-xl">
                    Cancel
                </router-link>
                <button type="submit" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-blue-200 duration-500 text-blue-700 hover:bg-blue-800 hover:text-white rounded-xl">
                    <span v-if="id === null"> Save </span> <span v-if="id !== null"> Update </span>
                </button>
            </div>
        </div>
    </form>

</template>

<script>

export default {
    data(){
        return {
            id: null,

        }
    },
    mounted() {

    },
    methods: {

        manageApi() {
            if(this.formData.id !== 'new') {
                this.createApi();
            } else {
                this.updateApi();
            }
        },

        createApi(){

        },

        updateApi(){

        },

    }
}

</script>
