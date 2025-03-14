<template>

    <form @submit.prevent="verification()" class="w-full">
        <div class="text-center mb-5 text-[21px]"> Please check your email </div>
        <div class="mb-3">
            <input type="text" name="verification_code" placeholder="Enter verification code" v-model="formData.verification_code" class="w-full outline-0 border-0 bg-white py-3 px-5" required autocomplete="off" />
        </div>
        <div class="block w-full mb-3">
            <button type="submit" class="bg-blue-600 text-center font-medium decoration-0 text-white duration-500 hover:bg-blue-950 px-6 py-3 whitespace-break-spaces">
                Send
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
