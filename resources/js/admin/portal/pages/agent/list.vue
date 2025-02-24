<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 p-3  rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Agents</div>

                <!-- button -->
                <router-link :to="{name:'manageAgent',params:{id:'new'}}" class="bg-[#1c252e] outline-none border-0 text-white rounded-xl opacity-100 duration-500 hover:opacity-75 h-[45px] w-[100px] text-[15px] inline-flex justify-center items-center">
                    Add
                </router-link>

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

                        <!-- agent card -->
                        <div class="decoration-0 w-full">
                            <div
                                class="border bg-white duration-500 rounded-xl overflow-hidden hover:shadow-xl relative">
                                <div class="absolute top-0 end-0 p-3">
                                    <div class="relative">
                                        <button type="button"
                                                class="bg-transparent outline-0 border-0 size-[35px] rounded-md duration-500 hover:bg-gray-200 inline-flex justify-center items-center"
                                                @click.stop="dropdownToggle(index)">
                                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                                                 class="bi bi-three-dots-vertical size-[20px]">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <ul class="absolute top-auto end-0 w-[150px] bg-white drop-shadow-xl border p-1 rounded-xl"
                                            v-if="isDropdownActive === index" @click.stop>
                                            <li>
                                                <router-link :to="{name:'viewAgent',params:{id:index}}" class="decoration-0 w-full flex justify-start items-center px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                    </span>
                                                    View
                                                </router-link>
                                            </li>
                                            <li>
                                                <router-link :to="{name:'manageAgent',params:{id:index}}"
                                                   class="decoration-0 flex justify-start items-center px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                        </svg>
                                                    </span>
                                                    Edit
                                                </router-link>
                                            </li>
                                            <li>
                                                <button type="button" class="decoration-0 w-full flex justify-start items-center text-rose-600 px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl"
                                                   @click="dropdownToggle(index);openDeleteModal()">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="w-full">

                                    <div class="block lg:flex justify-start items-start p-5">
                                        <img :src="'/images/image-27.png'"
                                             class="min-w-[85px] min-h-[85px] max-h-[85px] object-cover bg-cover bg-top object-top rounded-xl"
                                             alt="agent"/>
                                        <div class="pt-5 lg:pt-0 lg:ps-5 w-10/12">
                                            <div class="font-medium"> Theresa T. Brose</div>
                                            <div class="text-gray-500"> theresbrosea@dayrep.com</div>
                                            <div class="flex justify-start items-center mt-1">
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
                                <div class="w-full p-7 pt-0 flex justify-between flex-col">
                                    <div class="text-[13px]">

                                        <!-- agent card description -->
                                        <div class="text-gray-500 mb-3">
                                            <div class="flex justify-start items-center">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[24px]" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-blue-700"
                                                                  d="M19 9.77806V16.2C19 17.8801 19 18.7202 18.673 19.3619C18.3854 19.9264 17.9265 20.3854 17.362 20.673C16.7202 21 15.8802 21 14.2 21H9.8C8.11984 21 7.27976 21 6.63803 20.673C6.07354 20.3854 5.6146 19.9264 5.32698 19.3619C5 18.7202 5 17.8801 5 16.2V9.7774M21 12L15.5668 5.96393C14.3311 4.59116 13.7133 3.90478 12.9856 3.65138C12.3466 3.42882 11.651 3.42887 11.0119 3.65153C10.2843 3.90503 9.66661 4.59151 8.43114 5.96446L3 12M14 12C14 13.1045 13.1046 14 12 14C10.8954 14 10 13.1045 10 12C10 10.8954 10.8954 9.99996 12 9.99996C13.1046 9.99996 14 10.8954 14 12Z"
                                                                  stroke-width="2" stroke-linecap="round"
                                                                  stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>
                                                    243 Properties
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-gray-500 mb-3">
                                            <div class="flex justify-start items-center">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 48 48" class="size-[24px]" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="fill-blue-700" fill-rule="evenodd"
                                                                  clip-rule="evenodd"
                                                                  d="M23.4236 41.8172C23.424 41.8174 23.4243 41.8176 24 41L23.4236 41.8172ZM24.5764 41.8172L24.58 41.8146L24.5891 41.8082L24.6209 41.7854C24.6482 41.7658 24.6875 41.7374 24.7379 41.7004C24.8387 41.6263 24.9842 41.5178 25.1681 41.3765C25.5357 41.0938 26.0571 40.6794 26.6811 40.1459C27.9277 39.08 29.5908 37.5328 31.2565 35.6059C34.5639 31.7799 38 26.3195 38 20.0769C38 16.3454 36.5264 12.7655 33.9016 10.1251C31.2765 7.48454 27.7149 6 24 6C20.2851 6 16.7235 7.48454 14.0984 10.1251C11.4736 12.7655 10 16.3454 10 20.0769C10 26.3195 13.4361 31.7799 16.7435 35.6059C18.4092 37.5328 20.0723 39.08 21.3189 40.1459C21.9429 40.6794 22.4643 41.0938 22.8319 41.3765C23.0158 41.5178 23.1613 41.6263 23.2621 41.7004C23.3125 41.7374 23.3518 41.7658 23.3791 41.7854L23.4109 41.8082L23.42 41.8146L23.4236 41.8172C23.7689 42.0603 24.2311 42.0603 24.5764 41.8172ZM24 41L24.5764 41.8172C24.576 41.8174 24.5757 41.8176 24 41ZM29 20C29 22.7614 26.7614 25 24 25C21.2386 25 19 22.7614 19 20C19 17.2386 21.2386 15 24 15C26.7614 15 29 17.2386 29 20Z"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>
                                                    4936 N Broadway St, Chicago, IL 60640, USA
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-[17px] mb-3">
                                            Social Media :
                                        </div>

                                        <div class="flex justify-start items-center gap-1 flex-wrap md:flex-nowrap">
                                            <a href="javascript:void(0)"
                                               class="size-[40px] inline-flex justify-center items-center rounded-md bg-gray-200 duration-500 hover:bg-[#604ae3] group">
                                                <svg viewBox="0 0 32 32"
                                                     class="size-[20px] fill-[#604ae3] duration-500 group-hover:fill-white"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="size-[40px] inline-flex justify-center items-center rounded-md bg-gray-200 duration-500 hover:bg-[#e96767] group">
                                                <svg viewBox="0 0 32 32"
                                                     class="size-[20px] fill-[#e96767] duration-500 group-hover:fill-white"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M20.445 5h-8.891A6.559 6.559 0 0 0 5 11.554v8.891A6.559 6.559 0 0 0 11.554 27h8.891a6.56 6.56 0 0 0 6.554-6.555v-8.891A6.557 6.557 0 0 0 20.445 5zm4.342 15.445a4.343 4.343 0 0 1-4.342 4.342h-8.891a4.341 4.341 0 0 1-4.341-4.342v-8.891a4.34 4.34 0 0 1 4.341-4.341h8.891a4.342 4.342 0 0 1 4.341 4.341l.001 8.891z"></path>
                                                        <path
                                                            d="M16 10.312c-3.138 0-5.688 2.551-5.688 5.688s2.551 5.688 5.688 5.688 5.688-2.551 5.688-5.688-2.55-5.688-5.688-5.688zm0 9.163a3.475 3.475 0 1 1-.001-6.95 3.475 3.475 0 0 1 .001 6.95zM21.7 8.991a1.363 1.363 0 1 1-1.364 1.364c0-.752.51-1.364 1.364-1.364z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="size-[40px] inline-flex justify-center items-center rounded-md bg-gray-200 duration-500 hover:bg-[#45c5cd] group">
                                                <svg viewBox="0 0 24 24" class="size-[20px]" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path class="fill-[#45c5cd] duration-500 group-hover:fill-white"
                                                              fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M14.8486 5.65845C13.1442 5.65845 11.7626 7.0401 11.7626 8.74446C11.7626 8.95304 11.7831 9.15581 11.822 9.35119C11.8846 9.66589 11.7924 9.99153 11.5741 10.2267C11.3558 10.4619 11.0379 10.578 10.7194 10.5389C8.51116 10.268 6.50248 9.35556 4.88498 7.9954C4.91649 8.59732 5.12515 9.23671 5.57799 9.90654L6.25677 10.9106L5.14211 11.3863L4.92704 11.4781C5.0869 11.6609 5.2791 11.8487 5.49369 12.0332C5.73717 12.2425 5.97247 12.4165 6.14726 12.5381C6.23408 12.5985 6.30452 12.645 6.35171 12.6755C6.37527 12.6907 6.39294 12.7018 6.40383 12.7086L6.41495 12.7155L6.41519 12.7157L6.41551 12.7159L6.41578 12.7161L6.41619 12.7163L6.41647 12.7165L7.96448 13.655L6.34397 14.4653C6.26374 14.5054 6.18367 14.5412 6.10393 14.573C6.42924 14.8471 6.82517 15.0995 7.2464 15.2986L8.63623 15.9556L7.47226 16.9598C6.8369 17.508 6.19778 17.9166 5.36946 18.1326C6.59681 18.7875 8.00315 19.1596 9.49941 19.1596C14.3045 19.1596 18.1746 15.325 18.1746 10.6256V10.1059L18.5998 9.80721C19.2636 9.34107 19.7329 8.71068 20.0689 7.99004H18.5398H17.9084L17.637 7.41994C17.1401 6.37633 16.0772 5.65845 14.8486 5.65845ZM3.56882 12.9581C3.38031 13.174 3.29093 13.4642 3.33193 13.7553C3.44474 14.5563 3.92441 15.2462 4.45444 15.7728C4.59838 15.9158 4.75232 16.0531 4.91396 16.184C4.88926 16.1909 4.86437 16.1975 4.83925 16.2038C4.35789 16.3243 3.70926 16.3494 2.62755 16.2434C2.20934 16.2024 1.81014 16.4273 1.62841 16.8062C1.44668 17.185 1.5212 17.6371 1.81492 17.9376C3.75693 19.9245 6.48413 21.1596 9.49941 21.1596C15.212 21.1596 19.8978 16.7239 20.1628 11.126C21.4521 10.0429 22.0976 8.57673 22.4458 7.24263C22.5241 6.94292 22.459 6.62387 22.2696 6.37873C22.0803 6.13359 21.788 5.99004 21.4783 5.99004H19.1247C18.2201 4.58853 16.6437 3.65845 14.8486 3.65845C12.1796 3.65845 9.99072 5.71435 9.7793 8.32892C7.91032 7.84456 6.2705 6.78758 5.05863 5.35408C4.83759 5.09261 4.49814 4.9624 4.15894 5.00897C3.81974 5.05554 3.52794 5.27241 3.38555 5.58378C2.78087 6.90597 2.66434 8.43104 3.34116 9.98046L3.10746 10.0802C2.64466 10.2777 2.40073 10.7884 2.5379 11.2725C2.72276 11.925 3.14129 12.5011 3.56882 12.9581Z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="size-[40px] inline-flex justify-center items-center rounded-md bg-gray-200 duration-500 hover:bg-[#5cc184] group">
                                                <svg viewBox="0 0 24 24" class="size-[20px]" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path class="fill-[#5cc184] duration-500 group-hover:fill-white"
                                                              fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="size-[40px] inline-flex justify-center items-center rounded-md bg-gray-200 duration-500 hover:bg-[#f0934e] group">
                                                <svg viewBox="0 0 24 24" class="size-[20px]" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            class="stroke-[#f0934e] duration-500 group-hover:stroke-white"
                                                            stroke="#f0934e"
                                                            d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <rect
                                                            class="stroke-[#f0934e] duration-500 group-hover:stroke-white"
                                                            stroke="#f0934e" x="3" y="5" width="18" height="14" rx="2"
                                                            stroke-width="2" stroke-linecap="round"></rect>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex justify-start items-center gap-1 flex-wrap lg:flex-nowrap mt-3">
                                            <button type="button"
                                                    class="px-5 py-3 outline-0 flex justify-center items-center border-0 bg-blue-800 duration-500 hover:bg-blue-700 text-white rounded-md w-full">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="fill-white"
                                                                  d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Call Us
                                            </button>
                                            <button type="button"
                                                    class="px-5 py-3 outline-0 flex justify-center items-center border-0 bg-gray-300 duration-500 hover:bg-gray-600 hover:text-white rounded-md w-full group">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                class="stroke-black duration-500 group-hover:stroke-white"
                                                                stroke="#000000"
                                                                d="M8 10.5H16M8 14.5H11M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Message
                                            </button>
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

    <!-- delete modal -->
    <div class="fixed inset-0 size-full grid sm:justify-center items-center duration-500 z-50 overflow-y-auto scrollbar p-2 md:p-16" :class="{ 'invisible bg-black/35' : !isDeleteModal, 'visible bg-black/65' : isDeleteModal }" @click="isDeleteModal = false">
        <form @submit.prevent="deleteApi()" class="bg-white rounded-2xl min-w-full sm:min-w-[450px] p-5 sm:p-10 duration-500 origin-top" :class="{ '-translate-y-1/2 opacity-0' : !isDeleteModal, 'translate-y-0 opacity-100' : isDeleteModal }" @click.stop>
            <div class="w-full mb-3">
                <div class="mb-3 flex justify-center">
                    <svg viewBox="0 0 24 24" class="size-[75px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path class="stroke-[#E1523D]" d="M9.1709 4C9.58273 2.83481 10.694 2 12.0002 2C13.3064 2 14.4177 2.83481 14.8295 4" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-[#E1523D]" d="M20.5001 6H3.5" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-[#E1523D]" d="M18.8332 8.5L18.3732 15.3991C18.1962 18.054 18.1077 19.3815 17.2427 20.1907C16.3777 21 15.0473 21 12.3865 21H11.6132C8.95235 21 7.62195 21 6.75694 20.1907C5.89194 19.3815 5.80344 18.054 5.62644 15.3991L5.1665 8.5" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-[#E1523D]" d="M9.5 11L10 16" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-[#E1523D]" d="M14.5 11L14 16" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </div>
                <div class="text-center text-[21px] mb-5 font-medium"> Are your sure? </div>
            </div>
            <div class="flex justify-center items-center gap-x-2">
                <button type="button" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-gray-200 duration-500 text-gray-700 hover:bg-gray-700 hover:text-white rounded-lg" @click="closeDeleteModal()">
                    Cancel
                </button>
                <button type="submit" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-rose-200 duration-500 text-rose-700 hover:bg-rose-800 hover:text-white rounded-lg">
                    Confirm
                </button>
            </div>
        </form>
    </div>

</template>

<script>

export default {
    data() {
        return {
            // Data properties
            id: null,
            propertyStatus: 'rent',
            isDropdownActive: false,
            isManageModal: false,
            isDeleteModal: false,
            isViewModal: false,
        }
    },
    mounted() {
        // Mounted properties
        window.addEventListener("click", this.closeDropdown);
    },
    beforeUnmount() {
        // Before unmounted properties
        window.removeEventListener("click", this.closeDropdown);
    },
    methods: {

        // Dropdown toggle
        dropdownToggle(index) {
            this.isDropdownActive = this.isDropdownActive === index ? null : index;
        },

        // Close dropdown
        closeDropdown(event) {
            if (!event.target.closest("#dropdown")) {
                this.isDropdownActive = null;
            }
        },

        // Open manage modal
        openManageModal() {
            this.isManageModal = true;
        },

        // Open mange modal
        closeManageModal() {
            this.isManageModal = false;
        },

        // Open delete modal
        openDeleteModal() {
            this.isDeleteModal = true;
        },

        // Open delete modal
        closeDeleteModal() {
            this.isDeleteModal = false;
        },

        openViewModal() {
            this.isViewModal = true
        },

        closeViewModal() {
            this.isViewModal = false
        },

        // Manage api implementation
        manageApi() {

        },

        // Delete api implementation
        deleteApi() {

        },

    }
}

</script>
