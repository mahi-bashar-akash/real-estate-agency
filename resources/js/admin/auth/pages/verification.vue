<template>

    <form @submit.prevent="verification()" class="w-full">
        <div class="text-center mb-5 text-[21px]"> Please check your email </div>
        <div class="mb-3">
            <input type="text" name="verification_code" placeholder="Enter verification code" v-model="formData.verification_code" class="w-full outline-0 border-0 bg-white py-3 px-5 rounded-lg" required autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.verification_code"> {{error.verification_code[0]}} </div>
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
    data() {
        return {
            formData: {
                email: localStorage.getItem('email'),
                verification_code: ''
            },
            error: {},
            loading: false,
        };
    },
    mounted() {
        if(!this.formData.email) {
            this.$router.push({name:'forgot'})
        }
    },
    methods: {

        // Forgot Api integration
        verification() {
            this.loading = true;
            axios.post(`/api/auth/verification`,this.formData,{headers:{'Content-Type':'application/json; charset=utf-8'}}).then((response)=>{
                localStorage.setItem('email', this.formData.email);
                this.$router.push({name:'reset'});
            }).catch((error) => {
                this.error = error.response.data.errors;
            }).finally(()=>{
                this.loading = false;
            })
        },

    },
};
</script>
