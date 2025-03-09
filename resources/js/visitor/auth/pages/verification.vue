<template>

    <div class="text-center mb-5 text-[21px]"> Please check your email </div>
    <div class="grid grid-cols-4 gap-3">
        <input v-for="(input, index) in verificationCodeArray" :key="index" v-model="verificationCodeArray[index]" type="text" maxlength="1" class="w-full backdrop-blur-2xl h-full text-center text-[25px] py-4 outline-0 border-0 bg-blue-700 text-white placeholder-white shadow-xl rounded-lg" placeholder="0" @input="onInput(index)" :ref="`input${index}`" />
    </div>
    <div class="mt-3 text-center"> {{timer}} </div>
    <div class="mt-3 text-center">
        <a class="cursor-pointer text-gray-700" @click="resend()"> Resend </a>
    </div>

</template>

<script>

import axios from "axios";

export default {
    data() {
        return {
            verificationCodeArray: ["", "", "", ""],
            timer: "01:00",
            timerInterval: null,
            loading: false,
            error: {},
        };
    },
    mounted() {
        this.startCountdown();
    },
    beforeDestroy() {
        clearInterval(this.timerInterval);
    },
    methods: {

        resend() {
            clearInterval(this.timerInterval);
            this.verificationCodeArray = ["", "", "", ""];
            this.timer = "01:00";
            this.startCountdown();
        },

        startCountdown() {
            let minutes = 1;
            let seconds = 0;
            this.timerInterval = setInterval(() => {
                if (seconds === 0 && minutes === 0) {
                    clearInterval(this.timerInterval);
                } else {
                    if (seconds === 0) {
                        minutes--;
                        seconds = 59;
                    } else {
                        seconds--;
                    }
                    this.timer = `${String(minutes).padStart(2, "0")}:${String(seconds).padStart(2, "0")}`;
                }
            }, 1000);
        },

        onInput(index) {
            if (!/^[a-zA-Z0-9]*$/.test(this.verificationCodeArray[index])) {
                this.verificationCodeArray[index] = this.verificationCodeArray[index].slice(0, -1);
            }
            if (this.verificationCodeArray[index].length === 1 && index < this.verificationCodeArray.length - 1) {
                this.$nextTick(() => {
                    this.$refs[`input${index + 1}`][0].focus();
                });
            }
            if (this.verificationCodeArray[index].length === 0 && index > 0) {
                this.$nextTick(() => {
                    this.$refs[`input${index - 1}`][0].focus();
                });
            }
        },

    },
};
</script>
