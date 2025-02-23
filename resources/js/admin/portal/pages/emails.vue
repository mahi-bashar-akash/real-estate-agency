<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 rounded-2xl w-full h-[calc(100vh-130px)] overflow-hidden">

            <div class="w-full flex h-full p-2 gap-x-2 relative">
                <div class="min-w-full sm:min-w-[250px] max-w-full sm:max-w-[250px] bg-white h-full p-2 rounded-none duration-500 md:rounded-xl absolute top-0 bottom-0 md:static z-20" @click.self="isEmailSidebarActive = false" :class="{ 'start-[0px]' : isEmailSidebarActive,'-start-[110%] sm:-start-[260px]' : !isEmailSidebarActive }" id="emailSidebar">
                    <div class="flex justify-between gap-2">
                        <button type="button" class="bg-blue-600 duration-500 outline-0 border-0 hover:bg-blue-800 w-full flex justify-center items-center py-2 px-5 text-white rounded-lg font-medium">
                            Compose
                        </button>
                        <button type="button" class="bg-transparent outline-0 border-0 size-[35px] inline-flex md:hidden justify-center items-center rounded-full hover:bg-white duration-500" @click="closeEmailSidebar()">
                            <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="Menu / Close_SM">
                                        <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-1">
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span class="inline-flex justify-start items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                                </svg>
                                <span class="ms-2 text-[14px]"> Inbox </span>
                            </span>
                            <span> 5 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Important </span>
                                </span>
                            </span>
                            <span> 0 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Snoozed </span>
                                </span>
                            </span>
                            <span> 0 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Draft </span>
                                </span>
                            </span>
                            <span> 0 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Sent </span>
                                </span>
                            </span>
                            <span> 0 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Promotions </span>
                                </span>
                            </span>
                            <span> 2 </span>
                        </button>
                        <button type="button" class="bg-transparent rounded-lg hover:bg-blue-200 outline-0 border-0 text-gray-700 duration-500 hover:text-blue-800 px-5 py-2 flex justify-between items-center w-full font-medium">
                            <span>
                                <span class="inline-flex justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[18px]">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                    <span class="ms-2 text-[14px]"> Update </span>
                                </span>
                            </span>
                            <span> 14 </span>
                        </button>
                    </div>
                </div>
                <div class="w-full bg-white h-full p-3 rounded-xl">
                    <div class="w-full flex h-full gap-2 relative">
                        <div class="w-full 2xl:min-w-[420px] 2xl:max-w-[420px] p-2 h-full bg-gray-200 rounded-xl">
                            <div class="mb-2">
                                <div class="flex justify-start items-center gap-2">
                                    <button type="button" class="min-w-[45px] min-h-[45px] size-[45px] rounded-full inline-flex md:hidden justify-center items-center bg-transparent duration-500 hover:bg-gray-300" @click.stop="openEmailSidebar()">
                                        <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M5 7H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M5 12L14 12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M5 17L19 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="w-full relative">
                                        <div
                                            class="absolute top-0 bottom-0 start-0 ps-3 flex justify-center items-center pointer-events-none">
                                            <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path class="stroke-[#1c252e]"
                                                          d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <input type="text" id="search" name="keyword" placeholder="Search here ..."
                                               class="w-full outline-0 bg-white border border-white placeholder-[#1c252e] duration-500  h-[45px] focus-within:border-[#1c252e] py-2 ps-10 pe-4 rounded-xl"
                                               required autocomplete="off"/>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-1.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-2.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-3.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-4.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-6.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-start items-center mb-2 bg-white/25 duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer" @click.stop="emailContent()">
                                <img :src="'/images/agent-7.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        03:25 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full 2xl:min-w-[calc(100%-420px)] 2xl:max-w-[calc(100%-420px)] p-2 h-full bg-gray-200 rounded-xl overflow-y-auto scrollbar top-0 bottom-0 absolute 2xl:static duration-500" @click.self="isEmailContentActive = false" :class="{ 'end-[0px]' : isEmailContentActive, '-end-[110%]' : !isEmailContentActive }" id="emailContent">
                            <div class="flex justify-start items-center mb-2 px-3 py-2">
                                <img :src="'/images/agent-1.jpg'" class="min-w-[55px] min-h-[55px] size-[55px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                <div class="ps-3 flex w-full">
                                    <div class="w-9/12">
                                        <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                        <div class="text-gray-500 text-[14px]"> johnDoe@gmail.com </div>
                                    </div>
                                    <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                        Mon , 1 Apr , 23.12
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="text-[21px] font-medium mb-3"> Documentation of last meeting </div>
                                <div class="text-[18px] mb-3"> Hey : <span class="bg-blue-200 text-blue-800 p-2 text-[14px] font-medium">@Gaston Lapierre</span> </div>
                                <div class="mb-3 text-[13px] text-gray-500">
                                    Thank you all for your hard work and dedication to this project. Your contributions are invaluable, and I am confident that together we will achieve our goals successfully. After reviewing the current progress and considering various factors, I would like to share some observations and next steps.
                                    <br/><br/>
                                    Additionally, I would like to remind everyone of our upcoming team meeting scheduled for this week. During this meeting, we will discuss the revised timeline in detail and address any concerns or questions you may have ...
                                    <br/><br/>
                                    We'd like to thank you for being an exceptional author and encourage you to continue creating great work!
                                    <br/><br/>
                                    Best Regards ,
                                    <div class="text-[16px] text-black font-medium">
                                        Dianna Blair
                                    </div>
                                </div>
                                <div class="flex justify-start items-center mb-3 rounded-xl cursor-pointer">
                                    <img :src="'/images/agent-1.jpg'" class="min-w-[45px] min-h-[45px] size-[45px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                                    <div class="ps-3 flex w-full">
                                        <div class="w-9/12">
                                            <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                            <div class="text-gray-500 text-[14px]"> JohnDoe@gmail.com </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" hidden="hidden"> Message </label>
                                    <textarea name="message" id="message" class="w-full p-3 outline-0 border border-transparent focus-within:border-blue-900 duration-500 resize-none rounded-xl" cols="30" rows="5" required autocomplete="off"></textarea>
                                </div>
                                <div class="mb-3 flex justify-end items-center gap-x-2">
                                    <button type="button" class="px-5 py-2 rounded-xl outline-0 border-0 bg-gray-300 duration-500 hover:bg-gray-700 text-gray-950 hover:text-white" @click="emailContent()">
                                        Cancel
                                    </button>
                                    <button type="submit" class="px-5 py-2 rounded-xl outline-0 border-0 bg-blue-300 duration-500 hover:bg-blue-700 text-blue-950 hover:text-white">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            isEmailContentActive: false,
            isEmailSidebarActive: false,
        }
    },
    mounted() {
        window.addEventListener("click", (event) => this.handleEmailContentClose(event))
        window.addEventListener("click", (event) => this.handleEmailSidebarClose(event))
    },
    unmounted() {
        window.removeEventListener("click", this.handleEmailContentClose);
        window.removeEventListener("click", this.handleEmailSidebarClose);
    },
    methods: {
        emailContent() {
            if (this.isEmailSidebarActive) {
                this.isEmailSidebarActive = false;
            }
            this.isEmailContentActive = !this.isEmailContentActive;
        },
        openEmailSidebar() {
            if(this.isEmailContentActive) {
                this.isEmailSidebarActive = false;
            }
            this.isEmailSidebarActive = true;
        },
        closeEmailSidebar() {
            this.isEmailSidebarActive = false;
        },
        handleEmailContentClose(event) {
            if (!event.target.closest("#emailContent") && this.isEmailContentActive) {
                this.isEmailContentActive = false;
            }
        },
        handleEmailSidebarClose(event) {
            if (!event.target.closest("#emailSidebar") && this.isEmailSidebarActive) {
                this.isEmailSidebarActive = false;
            }
        },
    }
}

</script>
