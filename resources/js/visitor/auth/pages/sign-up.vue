<template>

    <form @submit.prevent="signUp()" class="w-full">
        <div class="mb-3 w-full">
            <label for="email" class="block mb-1"> Email </label>
            <input id="email" type="email" name="email" placeholder="Enter your email" v-model="formData.email" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <label for="password" class="block mb-1"> Password </label>
            <input id="password" type="password" name="password" placeholder="Enter your password" v-model="formData.password" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <label for="confirm-password" class="block mb-1"> Confirm Password </label>
            <input id="confirm-password" type="password" name="confirm-password" placeholder="Enter your confirm password" v-model="formData.password_confirmation" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" required autocomplete="off" />
        </div>
        <div class="mb-3 w-full">
            <button type="submit" class="rounded-md bg-blue-600 text-center decoration-0 text-white duration-500 hover:bg-blue-950 px-4 py-2 whitespace-break-spaces block w-full">
                SignUp
            </button>
        </div>
        <div class="text-center">
            Already have an account <br/>
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
                email: '',
                password: '',
                password_confirmation: '',
            }
        }
    },
    mounted() {

    },
    methods: {

        signUp() {

        }

    }
}

</script>
