<template>

    <form @submit.prevent="forgot()" class="w-full">
        <div class="mb-3 block w-full">
            <label for="email" class="block mb-1 font-medium">
                Email
            </label>
            <input id="email" type="email" name="email" v-model="formData.email" class="w-full outline-0 border-0 bg-white py-3 px-5" placeholder="Enter your email" autocomplete="off" />
            <div class="mt-1 text-rose-700" v-if="error.email"> {{error.email[0]}} </div>
        </div>
        <div class="block w-full mb-3">
            <button type="submit" class="bg-blue-600 text-center font-medium decoration-0 text-white duration-500 hover:bg-blue-950 px-6 py-3 whitespace-break-spaces">
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

        // Forgot Api integration
        forgot() {
            this.loading = true;
            axios.post(`/api/auth/forgot`,this.formData,{headers:{'Content-Type':'application/json; charset=utf-8'}}).then((response)=>{
                console.log(response)
            }).catch((error) => {
                this.error = error.response.data.errors;
            }).finally(()=>{
                this.loading = false;
            })
        },

    }
}

</script>
