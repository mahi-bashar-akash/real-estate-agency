<template>

    <form @submit.prevent="forgot()" class="w-full">
        <div class="mb-3 block w-full">
            <label for="email" class="block mb-1 font-medium">
                Email
            </label>
            <input id="email" type="email" name="email" class="w-full outline-0 border-0 bg-white py-3 px-5" placeholder="Enter your email" required autocomplete="off" />
        </div>
        <div class="block w-full">
            <button type="submit" class="bg-blue-600 text-center font-medium decoration-0 text-white duration-500 hover:bg-blue-950 px-6 py-3 whitespace-break-spaces">
                Send
            </button>
        </div>
    </form>

</template>

<script>

export default {
    data(){
        return {
            // Data properties
            email: '',
        }
    },
    mounted() {

    },
    methods: {

        // Forgot Api integration
        forgot() {

        },

    }
}

</script>
