<template>

    <div class="px-5">
        <div class="bg-gray-200  px-7 py-5 rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Orders </div>

                <!-- button -->
                <a href="javascript:void(0)"
                   class="bg-[#1c252e] text-white px-10 py-3 rounded-2xl opacity-100 duration-500 hover:opacity-90">
                    Add
                </a>

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
            <div class="h-[calc(100vh-340px)] overflow-y-auto py-3 pe-3 scroll-think">
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-4">

                    <template v-for="(each, index) in 20">

                        <!-- customer card -->
                        <div class="decoration-0 w-full">
                            <div
                                class="border bg-white duration-500 rounded-xl overflow-hidden hover:shadow-xl relative">
                                <div class="absolute top-0 end-0 p-3">
                                    <span class="px-3 py-1 rounded-md inline-block text-white bg-green-500 font-medium">
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
