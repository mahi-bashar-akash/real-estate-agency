<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 px-3 md:px-7 py-3 md:py-5 rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Orders </div>

                <!-- button -->
                <div class="flex justify-end items-center gap-x-2">
                    <a href="javascript:void(0)"
                       class="bg-[#1c252e] text-white rounded-xl opacity-100 duration-500 hover:opacity-75 h-[45px] w-[50px] text-[15px] inline-flex justify-center items-center">
                        <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path class="stroke-white" d="M16 18C16 16.6667 15.7778 15.5 15.5556 15.3333C15.3333 15.1667 13.7778 15 12 15C10.2222 15 8.66667 15.1667 8.44444 15.3333C8.22222 15.5 8 16.6667 8 18M16 18C16 19.3333 15.7778 20.5 15.5556 20.6667C15.3333 20.8333 13.7778 21 12 21C10.2222 21 8.66667 20.8333 8.44444 20.6667C8.22222 20.5 8 19.3333 8 18M16 18C16 18 19.5 17.75 20 17.5C20.5 17.25 21 15.5 21 13.5C21 11.5 20.5 9.75 20 9.5C19.6796 9.33977 18.1268 9.17955 16 9.08514M8 18C8 18 4.5 17.75 4 17.5C3.5 17.25 3 15.5 3 13.5C3 11.5 3.5 9.75 4 9.5C4.32045 9.33977 5.87316 9.17955 8 9.08514M8 9.08514C9.19168 9.03224 10.5636 9 12 9C13.4364 9 14.8083 9.03224 16 9.08514M8 9.08514V7C8 5.22222 8.22222 3.66667 8.44444 3.44444C8.66667 3.22222 10.2222 3 12 3C13.7778 3 15.3333 3.22222 15.5556 3.44444C15.7778 3.66667 16 5.22222 16 7V9.08514" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="javascript:void(0)"
                       class="bg-[#1c252e] text-white rounded-xl opacity-100 duration-500 hover:opacity-75 h-[45px] w-[50px] text-[15px] inline-flex justify-center items-center">
                        <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path class="fill-white" fill-rule="evenodd" clip-rule="evenodd" d="M9.29289 1.29289C9.48043 1.10536 9.73478 1 10 1H18C19.6569 1 21 2.34315 21 4V9C21 9.55228 20.5523 10 20 10C19.4477 10 19 9.55228 19 9V4C19 3.44772 18.5523 3 18 3H11V8C11 8.55228 10.5523 9 10 9H5V20C5 20.5523 5.44772 21 6 21H7C7.55228 21 8 21.4477 8 22C8 22.5523 7.55228 23 7 23H6C4.34315 23 3 21.6569 3 20V8C3 7.73478 3.10536 7.48043 3.29289 7.29289L9.29289 1.29289ZM6.41421 7H9V4.41421L6.41421 7ZM19 12C19.5523 12 20 12.4477 20 13V19H23C23.5523 19 24 19.4477 24 20C24 20.5523 23.5523 21 23 21H19C18.4477 21 18 20.5523 18 20V13C18 12.4477 18.4477 12 19 12ZM11.8137 12.4188C11.4927 11.9693 10.8682 11.8653 10.4188 12.1863C9.96935 12.5073 9.86526 13.1318 10.1863 13.5812L12.2711 16.5L10.1863 19.4188C9.86526 19.8682 9.96935 20.4927 10.4188 20.8137C10.8682 21.1347 11.4927 21.0307 11.8137 20.5812L13.5 18.2205L15.1863 20.5812C15.5073 21.0307 16.1318 21.1347 16.5812 20.8137C17.0307 20.4927 17.1347 19.8682 16.8137 19.4188L14.7289 16.5L16.8137 13.5812C17.1347 13.1318 17.0307 12.5073 16.5812 12.1863C16.1318 11.8653 15.5073 11.9693 15.1863 12.4188L13.5 14.7795L11.8137 12.4188Z"></path>
                            </g>
                        </svg>
                    </a>
                </div>

            </div>

            <!-- search -->
            <div class="mb-3">
                <label for="search" hidden="hidden">keyword</label>
                <div class="w-full max-w-[350px] relative">
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

            <!-- list part -->
            <div class="h-[calc(100vh-340px)] overflow-y-auto py-3 pe-3 scrollbar">
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-4">

                    <template v-for="(each, index) in 20">

                        <!-- customer card -->
                        <div class="decoration-0 w-full">
                            <div
                                class="border bg-white duration-500 rounded-xl overflow-hidden hover:shadow-xl relative">
                                <div class="absolute top-0 end-0 p-3">
                                    <span class="px-3 py-1 rounded-md inline-block text-white bg-green-500/35 text-green-700 font-medium text-[13px]">
                                        Paid
                                    </span>
                                </div>
                                <div class="w-full">

                                    <div class="p-5">
                                        <div class="flex justify-center">
                                            <img :src="'/images/image-28.png'"
                                                 class="min-w-[125px] min-h-[125px] max-h-[125px] object-cover bg-cover bg-top object-top rounded-full"
                                                 alt="customer"/>
                                        </div>
                                        <div class="pt-5">
                                            <div class="w-full mb-2 text-center">
                                                <div class="font-medium text-[19px] text-blue-700"> Theresa T. Brose </div>
                                            </div>
                                            <div class="w-full mb-2">
                                                <div class="font-medium text-[17px]"> Purchase Date: </div>
                                                <div class="text-gray-600 text-[17px]"> 02/01/2023 </div>
                                            </div>
                                            <div class="w-full mb-2">
                                                <div class="font-medium text-[17px]"> Contact Number: </div>
                                                <div class="text-gray-600 text-[17px]"> +231 06-75820711 </div>
                                            </div>
                                            <div class="w-full mb-2">
                                                <div class="font-medium text-[17px]"> Property Type: </div>
                                                <div class="text-gray-600 text-[17px]"> Residential </div>
                                            </div>
                                            <div class="w-full mb-2">
                                                <div class="font-medium text-[17px]"> Amount: </div>
                                                <div class="text-gray-600 text-[17px]"> $2,890,123 </div>
                                            </div>
                                            <div class="w-full">
                                                <div class="font-medium text-[17px]"> Purchase Properties: </div>
                                                <div class="text-gray-600 text-[17px]"> 123 Maple St, 456 Oak Ave </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </template>

                </div>
            </div>

            <!-- pagination part -->
            <div class="flex justify-center items-center mt-4 gap-x-2 font-medium">
                <button type="button"
                        class="outline-0 border-0 bg-white px-4 rounded-lg hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    Previous
                </button>
                <button type="button"
                        class="outline-0 border-0 px-4 bg-blue-700 rounded-lg duration-500 text-white py-2 text-[14px]">
                    1
                </button>
                <button type="button"
                        class="outline-0 border-0 bg-white px-4 rounded-lg hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    2
                </button>
                <button type="button"
                        class="outline-0 border-0 bg-white px-4 rounded-lg rounded-lg hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    3
                </button>
                <button type="button"
                        class="outline-0 border-0 bg-white px-4 hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    Next
                </button>
            </div>

        </div>
    </div>


</template>

<script>

export default {
    data() {
        return {
            propertyStatus: 'rent',
            isDropdownActive: false,
        }
    },
    mounted() {
        window.addEventListener("click", this.closeDropdown);
    },
    beforeUnmount() {
        window.removeEventListener("click", this.closeDropdown);
    },
    methods: {

        dropdownToggle(index) {
            this.isDropdownActive = this.isDropdownActive === index ? null : index;
        },

        closeDropdown(event) {
            if (!event.target.closest("#dropdown")) {
                this.isDropdownActive = null;
            }
        },

    }
}

</script>
