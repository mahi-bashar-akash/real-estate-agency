<template>

    <div class="w-full h-full bg-gray-200 p-3">
        <div class="w-full h-full bg-white rounded-xl overflow-hidden">
            <div class="flex justify-between items-center w-full pe-3">
                <div class="flex justify-start items-center ps-3 gap-x-2">
                    <button type="button"
                            class="min-w-[55px] min-h-[55px] size-[55px] rounded-full inline-flex xl:hidden justify-center items-center bg-transparent duration-500 hover:bg-gray-300"
                            @click.stop="openChatSidebar()">
                        <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M5 7H19" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M5 12L14 12" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M5 17L19 17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                    <div class="flex justify-start items-center py-3 bg-transparent pe-3 bg-white">
                        <img :src="'/images/agent-4.jpg'"
                             class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-top bg-top"
                             alt="">
                        <div class="flex justify-between items-center w-full">
                            <div class="ps-3 w-full">
                                <div class="font-medium text-gray-700 text-[17px]">
                                    John Doe
                                </div>
                                <div
                                    class="text-green-500 text-[14px] font-medium flex items-center justify-start gap-x-2">
                                    Active <span class="inline-block bg-green-500 h-3 w-3 rounded-full"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative" id="profileChatDropdown">
                    <button type="button"
                            class="outline-0 border-0 inline-flex justify-center items-center size-[45px] rounded-full bg-transparent duration-500 cursor-pointer hover:bg-gray-200"
                            @click.stop="chatDropdownToggle()">
                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="bi bi-three-dots-vertical size-[20px]">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                            </g>
                        </svg>
                    </button>
                    <ul class="absolute top-auto end-0 w-[170px] h-auto bg-white drop-shadow-xl rounded-lg p-1 mt-2 z-10" v-if="isChatDropdownActive" @click.stop>
                        <li>
                            <a href="javascript:void(0)" class="decoration-0 flex justify-start items-center px-3 py-2 bg-transparent duration-500 rounded-lg hover:bg-gray-200 text-[14px]" @click="chatDropdownToggle()">
                                <span class="inline-flex min-w-[25px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                                    </svg>
                                </span>
                                View Profile
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="decoration-0 flex justify-start items-center px-3 py-2 bg-transparent duration-500 rounded-lg hover:bg-gray-200 text-[14px]" @click="chatDropdownToggle()">
                                <span class="inline-flex min-w-[25px]">
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="stroke-black" stroke-width="1.5" d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                Call
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="decoration-0 flex justify-start items-center px-3 py-2 bg-transparent duration-500 rounded-lg hover:bg-gray-200 text-[14px]" @click="chatDropdownToggle()">
                                <span class="inline-flex min-w-[25px]">
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="stroke-black" d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                Video Call
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-3 h-[calc(100vh-215px)]">
                <div class="w-full bg-gray-100 h-full rounded-xl p-3 overflow-y-auto scrollbar">
                    <div v-for="(message, index) in messages" :key="index" class="flex mb-3" :class="{'justify-start': message.type === 'received', 'justify-end': message.type === 'sent'}">
                        <div v-if="message.type === 'received'" class="me-2">
                            <img :src="message.avatar" class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-center bg-center" alt="chat"/>
                        </div>
                        <div :class="message.type === 'received' ? 'bg-white' : 'bg-blue-800 text-white'" class="px-4 py-2 drop-shadow-xl rounded-lg">
                            <div class="font-medium">
                                {{ message.text }}
                            </div>
                            <div :class="message.type === 'received' ? 'text-gray-600 text-end' : 'text-white text-start'" class="text-[13px] mt-2">
                                {{ message.time }}
                            </div>
                        </div>
                        <div v-if="message.type === 'sent'" class="ms-2">
                            <img :src="message.avatar" class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-center bg-center" alt="chat"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center pb-3 px-3 gap-x-3">
                <input type="text" name="message" placeholder="Type Here ..." class="w-full px-5 py-4 rounded-xl outline-0 border-0 bg-gray-200" required autocomplete="off"/>
                <button type="submit" class="min-w-[57px] py-4 inline-flex justify-center items-center bg-gray-200 duration-500 hover:bg-blue-800 rounded-xl group">
                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path class="duration-500 stroke-black group-hover:stroke-white" stroke="#000000" d="M11.5003 12H5.41872M5.24634 12.7972L4.24158 15.7986C3.69128 17.4424 3.41613 18.2643 3.61359 18.7704C3.78506 19.21 4.15335 19.5432 4.6078 19.6701C5.13111 19.8161 5.92151 19.4604 7.50231 18.7491L17.6367 14.1886C19.1797 13.4942 19.9512 13.1471 20.1896 12.6648C20.3968 12.2458 20.3968 11.7541 20.1896 11.3351C19.9512 10.8529 19.1797 10.5057 17.6367 9.81135L7.48483 5.24303C5.90879 4.53382 5.12078 4.17921 4.59799 4.32468C4.14397 4.45101 3.77572 4.78336 3.60365 5.22209C3.40551 5.72728 3.67772 6.54741 4.22215 8.18767L5.24829 11.2793C5.34179 11.561 5.38855 11.7019 5.407 11.8459C5.42338 11.9738 5.42321 12.1032 5.40651 12.231C5.38768 12.375 5.34057 12.5157 5.24634 12.7972Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    data() {
        return {
            // Data properties
            isChatDropdownActive: false,
            isChatSidebarActive: false,
            messages: [
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "received",
                    avatar: "/images/agent-4.jpg"
                },
                {
                    text: "Keep going, you got this!",
                    time: "10:30 AM",
                    type: "sent",
                    avatar: "/images/agent-6.jpg"
                },
            ]
        }
    },
    mounted() {
        // Mounted properties
        window.addEventListener("click", this.handleChatDropdownClose);
    },
    unmounted() {
        // Before unmounted properties
        window.removeEventListener("click", this.handleChatDropdownClose);
    },
    props: {
        type: Boolean,
        default: false,
    },
    methods: {

        // Open chat sidebar in responsive
        openChatSidebar() {
            this.isChatSidebarActive = true;
        },

        // Chat dropdown toggle
        chatDropdownToggle() {
            this.isChatDropdownActive = !this.isChatDropdownActive;
        },

        // Handle Chat dropdown close
        handleChatDropdownClose() {
            if (!event.target.closest("#profileChatDropdown")) {
                this.isChatDropdownActive = false;
            }
        },

    }
}

</script>
