<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 p-3  rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Reviews</div>

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

                        <!-- review card -->
                        <div class="decoration-0 w-full">
                            <div
                                class="border bg-white duration-500 rounded-xl overflow-hidden hover:shadow-xl group relative">

                                <div class="w-full">

                                    <!-- review card image -->
                                    <div class="relative">
                                        <img :src="'/images/properties-2.jpg'"
                                             class="object-cover bg-cover w-full h-[250px]" alt="properties"/>
                                        <div class="absolute end-0 top-0 text-[13px] p-3 z-10">
                                            <div class="bg-white shadow-xl px-3 py-2 rounded-lg font-medium">
                                                15 Mar 2023
                                            </div>
                                        </div>
                                        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-black/55 to-white/35 z-0"></div>
                                        <div class="absolute start-0 bottom-0 p-3 z-10">
                                            <div class="flex justify-start items-center">
                                                <svg class="size-[25px] fill-yellow-400" viewBox="0 0 256 256" id="Flat"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M234.00977,115.47367,188.77539,153.1221l14.35938,58.07813a16.64744,16.64744,0,0,1-6.35938,17.67969,16.14026,16.14026,0,0,1-18.20312.5625l-50.4375-31.95313c-.14063-.07812-.20313-.04687-.26563,0l-46.875,29.69531a17.83088,17.83088,0,0,1-20.0625-.625A18.37492,18.37492,0,0,1,53.916,207.044l13.51562-53.16406-45.4375-38.40625a16.68222,16.68222,0,0,1-5.15625-18.0625A16.37036,16.37036,0,0,1,31.36914,86.044L90.43164,82.208,112.791,26.41117a16.324,16.324,0,0,1,15.1875-10.41407h.01562a16.33117,16.33117,0,0,1,15.21875,10.41407l22.03125,55.47656L224.63477,86.044A16.37036,16.37036,0,0,1,239.166,97.41117,16.68222,16.68222,0,0,1,234.00977,115.47367Z"></path>
                                                    </g>
                                                </svg>
                                                <svg class="size-[25px] fill-yellow-400" viewBox="0 0 256 256" id="Flat"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M234.00977,115.47367,188.77539,153.1221l14.35938,58.07813a16.64744,16.64744,0,0,1-6.35938,17.67969,16.14026,16.14026,0,0,1-18.20312.5625l-50.4375-31.95313c-.14063-.07812-.20313-.04687-.26563,0l-46.875,29.69531a17.83088,17.83088,0,0,1-20.0625-.625A18.37492,18.37492,0,0,1,53.916,207.044l13.51562-53.16406-45.4375-38.40625a16.68222,16.68222,0,0,1-5.15625-18.0625A16.37036,16.37036,0,0,1,31.36914,86.044L90.43164,82.208,112.791,26.41117a16.324,16.324,0,0,1,15.1875-10.41407h.01562a16.33117,16.33117,0,0,1,15.21875,10.41407l22.03125,55.47656L224.63477,86.044A16.37036,16.37036,0,0,1,239.166,97.41117,16.68222,16.68222,0,0,1,234.00977,115.47367Z"></path>
                                                    </g>
                                                </svg>
                                                <svg class="size-[25px] fill-yellow-400" viewBox="0 0 256 256" id="Flat"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M234.00977,115.47367,188.77539,153.1221l14.35938,58.07813a16.64744,16.64744,0,0,1-6.35938,17.67969,16.14026,16.14026,0,0,1-18.20312.5625l-50.4375-31.95313c-.14063-.07812-.20313-.04687-.26563,0l-46.875,29.69531a17.83088,17.83088,0,0,1-20.0625-.625A18.37492,18.37492,0,0,1,53.916,207.044l13.51562-53.16406-45.4375-38.40625a16.68222,16.68222,0,0,1-5.15625-18.0625A16.37036,16.37036,0,0,1,31.36914,86.044L90.43164,82.208,112.791,26.41117a16.324,16.324,0,0,1,15.1875-10.41407h.01562a16.33117,16.33117,0,0,1,15.21875,10.41407l22.03125,55.47656L224.63477,86.044A16.37036,16.37036,0,0,1,239.166,97.41117,16.68222,16.68222,0,0,1,234.00977,115.47367Z"></path>
                                                    </g>
                                                </svg>
                                                <svg class="size-[25px]" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                            class="stroke-yellow-500" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                                <svg class="size-[25px]" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                            class="stroke-yellow-500" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full p-7 flex justify-between flex-col">
                                    <div class="text-[21px] mb-3">

                                        <!-- review card title -->
                                        <div class="truncate-to-1-line">
                                            Dvilla Residences Batu
                                        </div>

                                        <div class="text-[15px] mb-2">
                                            390 Main Rd Mandeni
                                        </div>

                                    </div>

                                    <div class="w-full block bg-gray-200 p-5 rounded-lg">
                                        <div class="text-[17px] block font-bold mb-3">
                                            Best For Family Leaving
                                        </div>
                                        <div class="block mb-3">
                                            "The property was exactly as described and the buying process was smooth and hassle-free."
                                        </div>
                                        <div class="text-end">
                                            Reviewer: Adriana G. Faust
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </template>

                </div>
            </div>

            <!-- pagination part -->
            <div class="flex justify-center items-center gap-x-2 py-4 font-medium">
                <button type="button"
                        class="outline-0 border-0 rounded-lg bg-white px-4 hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    Previous
                </button>
                <button type="button"
                        class="outline-0 border-0 rounded-lg px-4 bg-blue-700 duration-500 text-white py-2 text-[14px]">
                    1
                </button>
                <button type="button"
                        class="outline-0 border-0 rounded-lg bg-white px-4 hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    2
                </button>
                <button type="button"
                        class="outline-0 border-0 rounded-lg bg-white px-4 hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
                    3
                </button>
                <button type="button"
                        class="outline-0 border-0 rounded-lg bg-white px-4 hover:bg-blue-700 duration-500 hover:text-white py-2 text-[14px]">
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

        }
    },
    mounted() {

    },
    methods: {

    }
}

</script>
