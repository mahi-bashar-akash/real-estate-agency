<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 rounded-2xl w-full h-[calc(100vh-130px)] overflow-hidden">

            <div class="flex justify-start items-start h-full relative">
                <div class="max-w-[380px] min-w-[380px] h-full absolute bg-white z-20 top-0 bottom-0 start-0">
                    <div class="ps-6 pe-5 py-3 flex justify-between items-center">
                        <div class="text-[25px]"> Settings </div>
                        <button type="button" class="bg-transparent outline-0 border-0 size-[35px] inline-flex justify-center items-center rounded-full hover:bg-gray-300 duration-500">
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
                    <div class="px-3 py-3">

                        <div>
                            <div>
                                <div class="flex justify-start items-center py-3 bg-transparent px-3">
                                    <div class="min-w-[45px] min-h-[45px] size-[45px] inline-flex justify-center items-center rounded-full group-hover:bg-white duration-500 bg-gray-200">
                                        <svg class="size-[20px]" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#000000;" d="M159.131,169.721c5.635,58.338,43.367,96.867,96.871,96.867c53.502,0,91.23-38.53,96.867-96.867l7.988-63.029 C365.812,44.768,315.281,0,256.002,0c-59.281,0-109.812,44.768-104.86,106.692L159.131,169.721z"></path> <path class="st0" d="M463.213,422.569l-3.824-24.35c-3.203-20.417-16.035-38.042-34.475-47.361l-80.473-40.693 c-2.519-1.274-4.57-3.194-6.289-5.338c-23.297,24.632-51.6,39.12-82.15,39.12c-30.549,0-58.856-14.488-82.152-39.12 c-1.719,2.144-3.77,4.064-6.289,5.338l-80.472,40.693c-18.442,9.319-31.272,26.944-34.475,47.361l-3.826,24.35 c-1.363,8.692,0.436,21.448,8.222,27.825C67.42,458.907,105.875,512,256.002,512c150.125,0,188.578-53.093,198.988-61.606 C462.779,444.017,464.576,431.261,463.213,422.569z"></path> </g> </g></svg>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="ps-3 w-full">
                                            <div class="font-medium text-gray-700 text-[17px]">
                                                John Doe
                                            </div>
                                            <div class="text-gray-500 text-[14px] font-medium">
                                                <div class="truncate-to-1-line">
                                                    JohnDoe@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 24 24" class="size-[25px] fill-black cursor-pointer" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M21,2H15a1,1,0,0,0-1,1V9a1,1,0,0,0,1,1h1v2h2V10h2v2h2V3A1,1,0,0,0,21,2ZM18,8H16V4h4V8ZM3,10H9a1,1,0,0,0,1-1V3A1,1,0,0,0,9,2H3A1,1,0,0,0,2,3V9A1,1,0,0,0,3,10ZM4,4H8V8H4ZM5,16v2H3V16ZM3,20H5v2H3Zm4-2v2H5V18Zm0-2H5V14H7V12H9v4ZM5,12v2H3V12Zm9,3v1H13V14H11v4h3v3a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V15a1,1,0,0,0-1-1H16V12H14Zm6,1v4H16V16ZM9,18h2v2h1v2H7V20H9ZM13,6H11V4h2ZM11,8h2v4H11ZM5,5H7V7H5ZM17,5h2V7H17Zm2,14H17V17h2Z"></path></g></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div v-for="(item, index) in 4" :key="index">
                                <div class="flex justify-start items-center py-3 bg-transparent cursor-pointer duration-500 hover:bg-gray-200 px-3 rounded-xl group" @click="setTab(index)">
                                    <div class="min-w-[45px] min-h-[45px] size-[45px] inline-flex justify-center items-center rounded-full group-hover:bg-white duration-500 bg-gray-200"
                                    >
                                        <template v-if="index === 0">
                                            <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M21.0667 5C21.6586 5.95805 22 7.08604 22 8.29344C22 11.7692 19.1708 14.5869 15.6807 14.5869C15.0439 14.5869 13.5939 14.4405 12.8885 13.8551L12.0067 14.7333C11.272 15.465 11.8598 15.465 12.1537 16.0505C12.1537 16.0505 12.8885 17.075 12.1537 18.0995C11.7128 18.6849 10.4783 19.5045 9.06754 18.0995L8.77362 18.3922C8.77362 18.3922 9.65538 19.4167 8.92058 20.4412C8.4797 21.0267 7.30403 21.6121 6.27531 20.5876C6.22633 20.6364 5.952 20.9096 5.2466 21.6121C4.54119 22.3146 3.67905 21.9048 3.33616 21.6121L2.45441 20.7339C1.63143 19.9143 2.1115 19.0264 2.45441 18.6849L10.0963 11.0743C10.0963 11.0743 9.3615 9.90338 9.3615 8.29344C9.3615 4.81767 12.1907 2 15.6807 2C16.4995 2 17.282 2.15509 18 2.43738" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M17.8851 8.29353C17.8851 9.50601 16.8982 10.4889 15.6807 10.4889C14.4633 10.4889 13.4763 9.50601 13.4763 8.29353C13.4763 7.08105 14.4633 6.09814 15.6807 6.09814C16.8982 6.09814 17.8851 7.08105 17.8851 8.29353Z" stroke="#1C274C" stroke-width="1.5"></path>
                                                </g>
                                            </svg>
                                        </template>
                                        <template v-if="index === 1">
                                            <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.10745 2.67414C9.98414 2.24187 10.9649 2 12 2C15.7274 2 18.7491 5.13623 18.7491 9.00497V9.70957C18.7491 10.5552 18.9903 11.3818 19.4422 12.0854L20.5496 13.8095C21.5612 15.3843 20.789 17.5249 19.0296 18.0229C14.4273 19.3257 9.57274 19.3257 4.97036 18.0229C3.21105 17.5249 2.43882 15.3843 3.45036 13.8095L4.5578 12.0854C5.00972 11.3818 5.25087 10.5552 5.25087 9.70957V9.00497C5.25087 7.93058 5.48391 6.91269 5.90039 6.00277" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7.5 19C8.15503 20.7478 9.92246 22 12 22C12.2445 22 12.4847 21.9827 12.7192 21.9492M16.5 19C16.2329 19.7126 15.781 20.3428 15.1985 20.8393" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                        </template>
                                        <template v-if="index === 2">
                                            <svg viewBox="0 0 24 24" class="size-[25px]" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><rect style="fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;" x="4.36" y="16.77" width="15.27" height="5.73" rx="1.91"></rect><path style="fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.91px;" d="M19.64,18.68V3.41A1.91,1.91,0,0,0,17.73,1.5H6.27A1.91,1.91,0,0,0,4.36,3.41V18.68"></path><line class="cls-1" x1="13.91" y1="19.64" x2="17.73" y2="19.64"></line><circle style="fill:#020202;" cx="7.23" cy="19.64" r="0.95"></circle></g></svg>
                                        </template>
                                        <template v-if="index === 3">
                                            <svg viewBox="0 0 24 24" class="size-[45px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.5 8.67709C10.8665 8.26188 11.4027 8 12 8C13.1046 8 14 8.89543 14 10C14 10.9337 13.3601 11.718 12.4949 11.9383C12.2273 12.0064 12 12.2239 12 12.5V12.5V13" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 16H12.01" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </template>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <div class="ps-3 w-full">
                                            <div class="font-medium text-gray-700 text-[17px]">
                                                <template v-if="index === 0">
                                                    Account
                                                </template>
                                                <template v-if="index === 1">
                                                    Notification
                                                </template>
                                                <template v-if="index === 2">
                                                    Storage and data
                                                </template>
                                                <template v-if="index === 3">
                                                    Help
                                                </template>
                                            </div>
                                            <div class="text-gray-500 text-[14px] font-medium">
                                                <div class="truncate-to-1-line">
                                                    <template v-if="index === 0">
                                                        Privacy, security, change number
                                                    </template>
                                                    <template v-if="index === 1">
                                                        Message, group, call tones
                                                    </template>
                                                    <template v-if="index === 2">
                                                        Network usage, auto download
                                                    </template>
                                                    <template v-if="index === 3">
                                                        Help center, contact us, privacy policy
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <svg viewBox="0 0 24 24" class="size-[35px]" fill="none">
                                                <path d="M15 11L12 14L9 11" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion Content -->
                                <div
                                    class="bg-gray-200 mt-2 rounded-xl overflow-hidden transition-all duration-500"
                                    :class="{ 'max-h-[900px] mb-2' : activeTab === index, 'max-h-0 mb-0' : activeTab !== index }"
                                >
                                    <div class="p-3">
                                        <template v-if="index === 0">
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Privacy
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Security
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Two-step verification
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Change number
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Request account info
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center duration-500 text-gray-700 hover:text-blue-700 text-[14px] font-medium">
                                                Delete my account
                                            </a>
                                        </template>
                                        <template v-if="index === 1">
                                            <div class="mb-2 w-full">
                                                <label class="flex items-center justify-between cursor-pointer">
                                                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Show Notification</span>
                                                    <input type="checkbox" value="" class="sr-only peer">
                                                    <span class="relative w-11 h-6 bg-gray-400 peer-focus:outline-none peer-focus:ring-0 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></span>
                                                </label>
                                            </div>
                                            <div class="mb-3 px-3 text-[14px]"> Sound Control </div>
                                            <div class="px-3 pb-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-[14px] font-medium w-full">
                                                <label for="silent" class="duration-500 text-gray-700 hover:text-blue-700 inline-flex justify-start items-center">
                                                    <input type="radio" id="silent" name="sound-type" class="me-2" />
                                                    Silent
                                                </label>
                                                <label for="vibrate" class="duration-500 text-gray-700 hover:text-blue-700 inline-flex justify-start items-center">
                                                    <input type="radio" id="vibrate" name="sound-type" class="me-2" />
                                                    Vibrate
                                                </label>
                                                <label for="default" class="duration-500 text-gray-700 hover:text-blue-700 inline-flex justify-start items-center">
                                                    <input type="radio" id="default" name="sound-type" class="me-2" />
                                                    Default
                                                </label>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="max-w-[380px] min-w-[380px] h-full">
                    <div class="px-5 py-3 text-[25px]">
                        Chats
                    </div>
                    <div class="px-5 pb-3 flex justify-between items-center gap-3">
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
                        <div class="min-w-[45px] min-h-[45px] flex justify-center items-center duration-500 bg-transparent hover:bg-white rounded-full cursor-pointer">
                            <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path stroke="#1c252e" d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path stroke="#1c252e" d="M12.9046 3.06005C12.6988 3 12.4659 3 12 3C11.5341 3 11.3012 3 11.0954 3.06005C10.7942 3.14794 10.5281 3.32808 10.3346 3.57511C10.2024 3.74388 10.1159 3.96016 9.94291 4.39272C9.69419 5.01452 9.00393 5.33471 8.36857 5.123L7.79779 4.93281C7.3929 4.79785 7.19045 4.73036 6.99196 4.7188C6.70039 4.70181 6.4102 4.77032 6.15701 4.9159C5.98465 5.01501 5.83376 5.16591 5.53197 5.4677C5.21122 5.78845 5.05084 5.94882 4.94896 6.13189C4.79927 6.40084 4.73595 6.70934 4.76759 7.01551C4.78912 7.2239 4.87335 7.43449 5.04182 7.85566C5.30565 8.51523 5.05184 9.26878 4.44272 9.63433L4.16521 9.80087C3.74031 10.0558 3.52786 10.1833 3.37354 10.3588C3.23698 10.5141 3.13401 10.696 3.07109 10.893C3 11.1156 3 11.3658 3 11.8663C3 12.4589 3 12.7551 3.09462 13.0088C3.17823 13.2329 3.31422 13.4337 3.49124 13.5946C3.69158 13.7766 3.96395 13.8856 4.50866 14.1035C5.06534 14.3261 5.35196 14.9441 5.16236 15.5129L4.94721 16.1584C4.79819 16.6054 4.72367 16.829 4.7169 17.0486C4.70875 17.3127 4.77049 17.5742 4.89587 17.8067C5.00015 18.0002 5.16678 18.1668 5.5 18.5C5.83323 18.8332 5.99985 18.9998 6.19325 19.1041C6.4258 19.2295 6.68733 19.2913 6.9514 19.2831C7.17102 19.2763 7.39456 19.2018 7.84164 19.0528L8.36862 18.8771C9.00393 18.6654 9.6942 18.9855 9.94291 19.6073C10.1159 20.0398 10.2024 20.2561 10.3346 20.4249C10.5281 20.6719 10.7942 20.8521 11.0954 20.94C11.3012 21 11.5341 21 12 21C12.4659 21 12.6988 21 12.9046 20.94C13.2058 20.8521 13.4719 20.6719 13.6654 20.4249C13.7976 20.2561 13.8841 20.0398 14.0571 19.6073C14.3058 18.9855 14.9961 18.6654 15.6313 18.8773L16.1579 19.0529C16.605 19.2019 16.8286 19.2764 17.0482 19.2832C17.3123 19.2913 17.5738 19.2296 17.8063 19.1042C17.9997 18.9999 18.1664 18.8333 18.4996 18.5001C18.8328 18.1669 18.9994 18.0002 19.1037 17.8068C19.2291 17.5743 19.2908 17.3127 19.2827 17.0487C19.2759 16.8291 19.2014 16.6055 19.0524 16.1584L18.8374 15.5134C18.6477 14.9444 18.9344 14.3262 19.4913 14.1035C20.036 13.8856 20.3084 13.7766 20.5088 13.5946C20.6858 13.4337 20.8218 13.2329 20.9054 13.0088C21 12.7551 21 12.4589 21 11.8663C21 11.3658 21 11.1156 20.9289 10.893C20.866 10.696 20.763 10.5141 20.6265 10.3588C20.4721 10.1833 20.2597 10.0558 19.8348 9.80087L19.5569 9.63416C18.9478 9.26867 18.6939 8.51514 18.9578 7.85558C19.1262 7.43443 19.2105 7.22383 19.232 7.01543C19.2636 6.70926 19.2003 6.40077 19.0506 6.13181C18.9487 5.94875 18.7884 5.78837 18.4676 5.46762C18.1658 5.16584 18.0149 5.01494 17.8426 4.91583C17.5894 4.77024 17.2992 4.70174 17.0076 4.71872C16.8091 4.73029 16.6067 4.79777 16.2018 4.93273L15.6314 5.12287C14.9961 5.33464 14.3058 5.0145 14.0571 4.39272C13.8841 3.96016 13.7976 3.74388 13.6654 3.57511C13.4719 3.32808 13.2058 3.14794 12.9046 3.06005Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="px-5 pb-3">
                        <div class="text-[17px] font-medium text-gray-500 mb-2"> Messages </div>
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" class="bg-blue-800 duration-500 hover:bg-blue-950 py-2 text-white rounded-md"> Chat </button>
                            <button type="button" class="bg-blue-800 duration-500 hover:bg-blue-950 py-2 text-white rounded-md"> Group </button>
                            <button type="button" class="bg-blue-800 duration-500 hover:bg-blue-950 py-2 text-white rounded-md"> Contact </button>
                        </div>
                    </div>
                    <div class="w-full overflow-y-auto h-[calc(100vh-335px)] px-3 py-3 scrollbar">
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-1.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-2.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Success comes from daily effort. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-3.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Stay focused and work smart. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-4.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Never stop learning and growing. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-6.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Hard work pays off in time. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-7.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Small steps lead to success. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-8.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Believe in yourself, always. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-9.jpg'" class="min-w-[65px] min-h-[65px] size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Challenges make you stronger. </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full bg-gray-100">

                </div>
            </div>

        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            activeTab: null,
            accordionItems: [],
        }
    },
    mounted() {

    },
    methods: {
        setTab(index) {
            this.activeTab = this.activeTab === index ? null : index; // Toggle the active tab
        },
    }
}

</script>
