<template>

    <form @submit.prevent="reset()" class="w-full">
        <div class="mb-3 w-full">
            <label for="password" class="flex justify-between items-center mb-1"> Password </label>
            <input id="password" type="password" name="password" placeholder="Enter your password" v-model="formData.password" class="rounded-md duration-500 focus-visible:border-blue-600 w-full px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <label for="password-confirmation" class="flex justify-between items-center mb-1"> Password Confirmation </label>
            <input id="password-confirmation" type="password" name="password_confirmation" placeholder="Enter your password confirmation" v-model="formData.password_confirmation" class="rounded-md duration-500 focus-visible:border-blue-600 w-full px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <button type="submit" class="rounded-md bg-blue-600 text-center decoration-0 text-white duration-500 hover:bg-blue-950 px-4 py-2 whitespace-break-spaces block w-full">
                Submit
            </button>
        </div>
        <div class="text-center">
            Don't have any account <br/>
            <router-link :to="{name:'SignIn'}" class="decoration-0 text-blue-950 font-medium">
                Sign In
            </router-link>
        </div>
    </form>

</template>

<script>

export default {
    data(){
        return {
            formData: {
                password: '',
                password_confirmation: '',
            }
        }
    },
    mounted() {

    },
    methods: {

        reset() {

        }

    }
}

</script>
