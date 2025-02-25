<template>

    <form @submit.prevent="forgot()" class="w-full">
        <div class="mb-3 w-full">
            <label for="email" class="block mb-1"> Email </label>
            <input id="email" type="email" name="email" placeholder="Enter your email" v-model="formData.email" class="rounded-md duration-500 focus-visible:border-blue-600 w-full px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <button type="submit" class="rounded-md bg-blue-600 text-center decoration-0 text-white duration-500 hover:bg-blue-950 px-4 py-2 whitespace-break-spaces block w-full">
                Send
            </button>
        </div>
        <div class="text-center">
            Remember password! <br/>
            <router-link :to="{name:'SignIn'}" class="decoration-0 text-blue-950 font-medium">
                Sign IN
            </router-link>
        </div>
    </form>

</template>

<script>

export default {
    data(){
        return {
            formData: {
                email: '',
            }
        }
    },
    mounted() {

    },
    methods: {

        forgot() {

        }

    }
}

</script>
