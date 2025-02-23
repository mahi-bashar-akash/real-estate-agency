<template>

    <form @submit.prevent="manageApi()" class="w-full h-[calc(100vh-120px)] py-5 overflow-y-auto px-8 scrollbar">
        <div class="mx-auto max-w-[850px]">

            <div class="w-full mb-3">
                <div class="mb-3 w-full">
                    <label for="upload-thumbnail" class="w-full flex bg-gray-200 rounded-lg justify-center items-center h-[200px] text-[21px] cursor-pointer">
                        <input type="file" name="upload-thumbnail" id="upload-thumbnail" hidden="hidden">
                        Upload Thumbnail
                    </label>
                </div>
                <div class="mb-3 w-full">
                    <label for="service-title" class="block mb-1 w-full"> Service Title: </label>
                    <input id="service-title" type="text" name="service-title" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
                </div>
                <div class="mb-3 w-full">
                    <label for="service-tag" class="block mb-1 w-full"> Service Tag: </label>
                    <input id="service-tag" type="text" name="service-tag" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
                </div>
                <div class="w-full">
                    <label for="service-description" class="block mb-1 w-full"> Service Description: </label>
                    <textarea name="service-description" id="service-description" cols="30" rows="5" class="w-full p-4 outline-0 border border-gray-300 block rounded-lg" required autocomplete="off"></textarea>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2">
                <button type="button" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-gray-200 duration-500 text-gray-700 hover:bg-gray-700 hover:text-white rounded-lg" @click="closeManageModal()">
                    Cancel
                </button>
                <button type="submit" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-blue-200 duration-500 text-blue-700 hover:bg-blue-800 hover:text-white rounded-lg">
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
