<template>

    <form @submit.prevent="forgot()" class="w-full">
        <div class="mb-3 block w-full">
            <label for="email" class="block mb-1 font-medium">
                Email
            </label>
            <input id="email" type="email" name="email" v-model="formData.email" class="w-full outline-0 border-0 bg-white py-3 px-5 rounded-lg" placeholder="Enter your email" autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.email"> {{error.email[0]}} </div>
        </div>
        <div class="w-full flex items-center mb-3">
            <button type="submit" class="min-w-[150px] bg-blue-600 text-center h-[48px] inline-flex justify-center items-center font-medium decoration-0 text-white duration-500 hover:bg-blue-950 whitespace-break-spaces rounded-lg" v-if="!loading">
                Send
            </button>
            <button type="button" class="min-w-[150px] bg-blue-600 text-center h-[48px] inline-flex justify-center items-center font-medium decoration-0 text-white duration-500 hover:bg-blue-950 whitespace-break-spaces rounded-lg" v-if="loading">
                <span class="inline-flex justify-center items-center border-2 border-transparent animate-spin border-t-white rounded-full size-[15px]"></span>
            </button>
        </div>
        <div class="text-center">
            Remember password! <br/>
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
            // Data properties
            formData: {
                email: '',
            },
            loading: false,
            error: {},
        }
    },
    mounted() {

    },
    methods: {

        // Forgot api integration
        async forgot() {
            this.loading = true;
            axios.post(`/api/auth/forgot`,this.formData,{headers:{'Content-Type':'application/json; charset=utf-8'}}).then((response)=>{
                localStorage.setItem('email', this.formData.email);
                this.$router.push({name:'verification'});
            }).catch((error) => {
                this.error = error.response.data.errors;
            }).finally(()=>{
                this.loading = false;
            })
        },

    }
}

</script>
