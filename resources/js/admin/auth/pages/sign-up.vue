<template>

    <form @submit.prevent="signUp()" class="w-full">
        <div class="mb-3 w-full">
            <label for="email" class="block mb-1"> Email </label>
            <input id="email" type="email" name="email" placeholder="Enter your email" v-model="formData.email" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.email"> {{error.email[0]}} </div>
        </div>
        <div class="mb-3 w-full">
            <label for="password" class="block mb-1"> Password </label>
            <input id="password" type="password" name="password" placeholder="Enter your password" v-model="formData.password" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.password"> {{error.password[0]}} </div>
        </div>
        <div class="mb-3 w-full">
            <label for="confirm-password" class="block mb-1"> Confirm Password </label>
            <input id="confirm-password" type="password" name="password_confirmation" placeholder="Enter your confirm password" v-model="formData.password_confirmation" class="rounded-md w-full duration-500 focus-visible:border-blue-600 px-3 py-2 outline-0 border border-gray-300" autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.password_confirmation"> {{error.password_confirmation[0]}} </div>
        </div>
        <div class="mb-3 w-full">
            <button type="submit" class="rounded-md bg-blue-600 text-center decoration-0 text-white duration-500 hover:bg-blue-950 px-4 py-2 whitespace-break-spaces block w-full">
                SignUp
            </button>
        </div>
        <div class="text-center">
            Already have an account <br/>
            <router-link :to="{name:'signIn'}" class="decoration-0 text-blue-950 font-medium">
                Sign In
            </router-link>
        </div>
    </form>

</template>

<script>

import axios from "axios";

export default {
    data(){
        return {
            formData: {
                email: '',
                password: '',
                password_confirmation: '',
                user_type: 'admin'
            },
            loading: false,
            error: {},
        }
    },
    mounted() {

    },
    methods: {

        // SignUp api integration
        async signUp() {
            this.loading = true;
            axios.post(`/api/auth/registration`,this.formData,{headers:{'Content-Type':'application/json; charset=utf-8'}}).then((response)=>{
                this.$router.push({name:'signIn'});
            }).catch((error) => {
                this.error = error.response.data.errors;
            }).finally(()=>{
                this.loading = false;
            })
        }

    }
}

</script>
