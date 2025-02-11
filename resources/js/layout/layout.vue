<template>
    <div class="overflow-x-hidden">
        <Header/>
        <router-view/>
        <Footer/>
    </div>
</template>

<script>
import Header from "./includes/header.vue";
import Footer from "./includes/footer.vue";

export default {
    components: {
        Header, Footer
    },
    data() {
        return {}
    },
    mounted() {

    },
    methods: {}
}

</script>
