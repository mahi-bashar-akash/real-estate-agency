<template>

    <form @submit.prevent="manageApi()" class="w-full h-[calc(100vh-120px)] py-5 overflow-y-auto px-8 scrollbar">
        <div class="mx-auto max-w-[850px]">
            <div class="mb-3 w-full">
                <label for="upload-thumbnail" class="w-full flex bg-gray-200 rounded-xl justify-center items-center h-[350px] text-[21px] cursor-pointer">
                    <input type="file" name="upload-thumbnail" id="upload-thumbnail" hidden="hidden">
                    Upload Thumbnail
                </label>
            </div>
            <div class="mb-3 w-full">
                <label for="property-name" class="block mb-1 w-full"> Property Name: </label>
                <input id="property-name" type="text" name="property-name" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="property-category" class="block mb-1 w-full"> Property Categories: </label>
                <div class="relative w-full">
                    <select name="property-category" id="property-category" class="w-full px-4 py-3 appearance-none outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off">
                        <option value="0"> Select Category </option>
                        <option value="Commercial"> Commercial </option>
                        <option value="Office"> Office </option>
                        <option value="Store"> Store </option>
                        <option value="Residential"> Residential </option>
                        <option value="Apartment"> Apartment </option>
                        <option value="Condominium"> Condominium </option>
                        <option value="Building"> Building </option>
                        <option value="Single Family"> Single Family </option>
                        <option value="Villa"> Villa </option>
                    </select>
                    <div class="absolute top-0 bottom-0 end-0 pointer-events-none flex justify-end items-center pe-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[20px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mb-3 w-full">
                <label for="property-for" class="block mb-1 w-full"> Property For </label>
                <div class="relative w-full">
                    <select name="property-for" id="property-for" class="w-full px-4 py-3 appearance-none outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off">
                        <option value="0"> Select For </option>
                        <option value="Purchase"> Purchase </option>
                        <option value="Rent"> Rent </option>
                        <option value="Sell"> Sell </option>
                        <option value="Miss"> Miss </option>
                        <option value="Evaluation"> Evaluation </option>
                        <option value="Mortgage"> Mortgage </option>
                    </select>
                    <div class="absolute top-0 bottom-0 end-0 pointer-events-none flex justify-end items-center pe-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="size-[20px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mb-3 w-full">
                <label for="price" class="block mb-1 w-full"> Price: </label>
                <input id="price" type="text" name="price" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="bedroom" class="block mb-1 w-full"> Bedroom: </label>
                <input id="bedroom" type="text" name="bedroom" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="bathroom" class="block mb-1 w-full"> Bathroom: </label>
                <input id="bathroom" type="text" name="bathroom" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="square-foot" class="block mb-1 w-full"> Square Foot: </label>
                <input id="square-foot" type="text" name="square-foot" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="floor" class="block mb-1 w-full"> Floor: </label>
                <input id="floor" type="text" name="floor" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="property-address" class="block mb-1 w-full"> Property Address: </label>
                <input id="property-address" type="text" name="property-address" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="zip-code" class="block mb-1 w-full"> Zip-Code: </label>
                <input id="zip-code" type="text" name="zip-code" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="city" class="block mb-1 w-full"> City: </label>
                <input id="city" type="text" name="city" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
            </div>
            <div class="mb-3 w-full">
                <label for="country" class="block mb-1 w-full"> Country: </label>
                <input id="country" type="text" name="country" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-xl duration-500 focus-within:border-blue-800" required autocomplete="off" />
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
