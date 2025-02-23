<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 rounded-2xl w-full h-[calc(100vh-130px)] overflow-hidden">

            <div class="flex justify-start items-start h-full relative">
                <div class="w-full max-w-full min-w-full sm:max-w-[380px] sm:min-w-[380px] h-full absolute bg-gray-200 z-30 top-0 bottom-0 overflow-y-auto scrollbar duration-500" @click.self="isChatSettingsSidebarActive = false" :class="{ 'start-[0px]' : isChatSettingsSidebarActive, '-start-[110%] sm:-start-[380px]' : !isChatSettingsSidebarActive }" id="chatSettingsSidebar">
                    <div class="ps-6 pe-5 py-3 flex justify-between items-center">
                        <div class="text-[25px]"> Settings </div>
                        <button type="button" class="bg-transparent outline-0 border-0 size-[35px] inline-flex justify-center items-center rounded-full hover:bg-white duration-500" @click="closeChatSettingsSidebar()">
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
                                    <div class="min-w-[35px] sm:min-w-[45px] min-h-[35px] sm:min-h-[45px] size-[35px] sm:size-[45px] inline-flex justify-center items-center rounded-full group-hover:bg-white duration-500 bg-gray-200">
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
                                            <svg viewBox="0 0 24 24" class="size-[25px] fill-black duration-500 hover:fill-blue-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M21,2H15a1,1,0,0,0-1,1V9a1,1,0,0,0,1,1h1v2h2V10h2v2h2V3A1,1,0,0,0,21,2ZM18,8H16V4h4V8ZM3,10H9a1,1,0,0,0,1-1V3A1,1,0,0,0,9,2H3A1,1,0,0,0,2,3V9A1,1,0,0,0,3,10ZM4,4H8V8H4ZM5,16v2H3V16ZM3,20H5v2H3Zm4-2v2H5V18Zm0-2H5V14H7V12H9v4ZM5,12v2H3V12Zm9,3v1H13V14H11v4h3v3a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V15a1,1,0,0,0-1-1H16V12H14Zm6,1v4H16V16ZM9,18h2v2h1v2H7V20H9ZM13,6H11V4h2ZM11,8h2v4H11ZM5,5H7V7H5ZM17,5h2V7H17Zm2,14H17V17h2Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div v-for="(item, index) in 4" :key="index">
                                <div class="flex justify-start items-center py-3 bg-transparent cursor-pointer duration-500 hover:bg-gray-200 px-3 rounded-xl group" @click="setTab(index)">
                                    <div class="min-w-[35px] sm:min-w-[45px] min-h-[35px] sm:min-h-[45px] size-[35px] sm:size-[45px] inline-flex justify-center items-center rounded-full group-hover:bg-white duration-500 bg-gray-200"
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
                                    class="bg-white mt-2 rounded-xl overflow-hidden transition-all duration-500"
                                    :class="{ 'max-h-[900px] mb-2' : activeTab === index, 'max-h-0 mb-0' : activeTab !== index }"
                                >
                                    <div class="p-3">
                                        <template v-if="index === 0">
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 192 192" class="size-[25px] fill-gray-700" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <g fill="none" class="stroke-gray-700" stroke-width="12">
                                                                <path stroke-linecap="round" d="M151.8 144.5a74 74 0 0 1-85.59 19.21A74 74 0 0 1 22.42 87.7a74 74 0 0 1 59.55-64.42m28.03.06a74 74 0 0 1 50.06 35.61 74 74 0 0 1 5.915 61.15"></path>
                                                                <path d="M76 92h40c4.432 0 8 3.568 8 8v22c0 4.432-3.568 8-8 8H76c-4.432 0-8-3.568-8-8v-22c0-4.432 3.568-8 8-8zm4 0V77.7C80 69.029 87.163 62 96 62s16 7.029 16 15.7V92"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Privacy
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" d="M20.91 11.12C20.91 16.01 17.36 20.59 12.51 21.93C12.18 22.02 11.82 22.02 11.49 21.93C6.63996 20.59 3.08997 16.01 3.08997 11.12V6.72997C3.08997 5.90997 3.70998 4.97998 4.47998 4.66998L10.05 2.39001C11.3 1.88001 12.71 1.88001 13.96 2.39001L19.53 4.66998C20.29 4.97998 20.92 5.90997 20.92 6.72997L20.91 11.12Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path class="stroke-gray-700" d="M12 12.5C13.1046 12.5 14 11.6046 14 10.5C14 9.39543 13.1046 8.5 12 8.5C10.8954 8.5 10 9.39543 10 10.5C10 11.6046 10.8954 12.5 12 12.5Z" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path class="stroke-gray-700" d="M12 12.5V15.5" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Security
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" d="M15 18L17 20L21 16M11 20H7.2C6.0799 20 5.51984 20 5.09202 19.782C4.71569 19.5903 4.40973 19.2843 4.21799 18.908C4 18.4802 4 17.9201 4 16.8V7.2C4 6.0799 4 5.51984 4.21799 5.09202C4.40973 4.71569 4.71569 4.40973 5.09202 4.21799C5.51984 4 6.0799 4 7.2 4H16.8C17.9201 4 18.4802 4 18.908 4.21799C19.2843 4.40973 19.5903 4.71569 19.782 5.09202C20 5.51984 20 6.0799 20 7.2V12M7 20C7 19.6575 7.03443 19.3231 7.10002 19C7.56329 16.7178 9.58104 15 12 15M14 10C14 11.1046 13.1046 12 12 12C10.8954 12 10 11.1046 10 10C10 8.89543 10.8954 8 12 8C13.1046 8 14 8.89543 14 10Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Two-step verification
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" stroke-width="1.5" d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Change number
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" d="M12 17V11" stroke-width="1.5" stroke-linecap="round"></path>
                                                            <circle class="fill-gray-700" cx="1" cy="1" r="1" transform="matrix(1 0 0 -1 11 9)"></circle>
                                                            <path class="stroke-gray-700" stroke-width="1.5" d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke-linecap="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Request account info
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="fill-gray-700" d="M12 2.75C11.0215 2.75 10.1871 3.37503 9.87787 4.24993C9.73983 4.64047 9.31134 4.84517 8.9208 4.70713C8.53026 4.56909 8.32557 4.1406 8.46361 3.75007C8.97804 2.29459 10.3661 1.25 12 1.25C13.634 1.25 15.022 2.29459 15.5365 3.75007C15.6745 4.1406 15.4698 4.56909 15.0793 4.70713C14.6887 4.84517 14.2602 4.64047 14.1222 4.24993C13.813 3.37503 12.9785 2.75 12 2.75Z"></path>
                                                            <path class="fill-gray-700" d="M2.75 6C2.75 5.58579 3.08579 5.25 3.5 5.25H20.5001C20.9143 5.25 21.2501 5.58579 21.2501 6C21.2501 6.41421 20.9143 6.75 20.5001 6.75H3.5C3.08579 6.75 2.75 6.41421 2.75 6Z"></path>
                                                            <path class="fill-gray-700" d="M5.91508 8.45011C5.88753 8.03681 5.53015 7.72411 5.11686 7.75166C4.70356 7.77921 4.39085 8.13659 4.41841 8.54989L4.88186 15.5016C4.96735 16.7844 5.03641 17.8205 5.19838 18.6336C5.36678 19.4789 5.6532 20.185 6.2448 20.7384C6.83639 21.2919 7.55994 21.5307 8.41459 21.6425C9.23663 21.75 10.2751 21.75 11.5607 21.75H12.4395C13.7251 21.75 14.7635 21.75 15.5856 21.6425C16.4402 21.5307 17.1638 21.2919 17.7554 20.7384C18.347 20.185 18.6334 19.4789 18.8018 18.6336C18.9637 17.8205 19.0328 16.7844 19.1183 15.5016L19.5818 8.54989C19.6093 8.13659 19.2966 7.77921 18.8833 7.75166C18.47 7.72411 18.1126 8.03681 18.0851 8.45011L17.6251 15.3492C17.5353 16.6971 17.4712 17.6349 17.3307 18.3405C17.1943 19.025 17.004 19.3873 16.7306 19.6431C16.4572 19.8988 16.083 20.0647 15.391 20.1552C14.6776 20.2485 13.7376 20.25 12.3868 20.25H11.6134C10.2626 20.25 9.32255 20.2485 8.60915 20.1552C7.91715 20.0647 7.54299 19.8988 7.26957 19.6431C6.99616 19.3873 6.80583 19.025 6.66948 18.3405C6.52891 17.6349 6.46488 16.6971 6.37503 15.3492L5.91508 8.45011Z"></path>
                                                            <path class="fill-gray-700" d="M9.42546 10.2537C9.83762 10.2125 10.2051 10.5132 10.2464 10.9254L10.7464 15.9254C10.7876 16.3375 10.4869 16.7051 10.0747 16.7463C9.66256 16.7875 9.29502 16.4868 9.25381 16.0746L8.75381 11.0746C8.71259 10.6625 9.0133 10.2949 9.42546 10.2537Z"></path>
                                                            <path class="fill-gray-700" d="M15.2464 11.0746C15.2876 10.6625 14.9869 10.2949 14.5747 10.2537C14.1626 10.2125 13.795 10.5132 13.7538 10.9254L13.2538 15.9254C13.2126 16.3375 13.5133 16.7051 13.9255 16.7463C14.3376 16.7875 14.7051 16.4868 14.7464 16.0746L15.2464 11.0746Z"></path>
                                                        </g>
                                                    </svg>
                                                </span>
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
                                            <div class="grid grid-cols-3 gap-2 px-3">
                                                <label for="silent" class="flex items-center gap-1 cursor-pointer text-gray-700">
                                                    <input type="radio" id="silent" name="sound-type" class="hidden peer" checked />
                                                    <span class="w-5 h-5 flex items-center justify-center rounded-full border-4 border-gray-300 peer-checked:border-blue-700">
                                                        <span class="w-3 h-3 bg-blue-700 rounded-full opacity-0 peer-checked:opacity-100 transition"></span>
                                                    </span>
                                                    <span>Silent</span>
                                                </label>

                                                <label for="vibrate" class="flex items-center gap-1 cursor-pointer text-gray-700">
                                                    <input type="radio" id="vibrate" name="sound-type" class="hidden peer" />
                                                    <span class="w-5 h-5 flex items-center justify-center rounded-full border-4 border-gray-300 peer-checked:border-blue-700">
                                                        <span class="w-3 h-3 bg-blue-700 rounded-full opacity-0 peer-checked:opacity-100 transition"></span>
                                                    </span>
                                                    <span>Vibrate</span>
                                                </label>

                                                <label for="default" class="flex items-center gap-1 cursor-pointer text-gray-700">
                                                    <input type="radio" id="default" name="sound-type" class="hidden peer" />
                                                    <span class="w-5 h-5 flex items-center justify-center rounded-full border-4 border-gray-300 peer-checked:border-blue-700">
                                                        <span class="w-3 h-3 bg-blue-700 rounded-full opacity-0 peer-checked:opacity-100 transition"></span>
                                                    </span>
                                                    <span>Default</span>
                                                </label>
                                            </div>
                                        </template>
                                        <template v-if="index === 2">

                                            <div class="flex justify-start items-center mb-3">
                                                <div class="size-[55px] inline-flex justify-center items-center bg-gray-200 rounded-full">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H9.67452C10.1637 5 10.4083 5 10.6385 5.05526C10.8425 5.10425 11.0376 5.18506 11.2166 5.29472C11.4184 5.4184 11.5914 5.59135 11.9373 5.93726L12.0627 6.06274C12.4086 6.40865 12.5816 6.5816 12.7834 6.70528C12.9624 6.81494 13.1575 6.89575 13.3615 6.94474C13.5917 7 13.8363 7 14.3255 7H17.8C18.9201 7 19.4802 7 19.908 7.21799C20.2843 7.40973 20.5903 7.71569 20.782 8.09202C21 8.51984 21 9.0799 21 10.2V15.8C21 16.9201 21 17.4802 20.782 17.908C20.5903 18.2843 20.2843 18.5903 19.908 18.782C19.4802 19 18.9201 19 17.8 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                </div>
                                                <div class="ms-2">
                                                    <div class="text-[17px] font-medium"> Manage storage </div>
                                                    <div class="text-gray-700 text-[14px]"> 2.4 GB </div>
                                                </div>
                                            </div>

                                            <div class="flex justify-start items-center">
                                                <div class="size-[55px] inline-flex justify-center items-center bg-gray-200 rounded-full">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7 13.9998C12.777 13.9998 13.65 14.8952 13.65 15.9998C13.65 17.1043 12.777 17.9998 11.7 17.9998C10.623 17.9998 9.75 17.1043 9.75 15.9998C9.75 14.8952 10.623 13.9998 11.7 13.9998Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.53734 11.4153C6.21454 11.6749 6.16328 12.147 6.42284 12.4698C6.68241 12.7926 7.15451 12.8438 7.47731 12.5843L6.53734 11.4153ZM15.9217 12.5843C16.2445 12.8438 16.7166 12.7926 16.9762 12.4698C17.2357 12.147 17.1845 11.6749 16.8617 11.4153L15.9217 12.5843ZM4.40719 8.91358C4.08343 9.17195 4.03042 9.64385 4.28878 9.96761C4.54714 10.2914 5.01905 10.3444 5.34281 10.086L4.40719 8.91358ZM18.0785 10.1024C18.4113 10.349 18.881 10.2791 19.1276 9.9463C19.3742 9.61349 19.3043 9.14379 18.9715 8.89719L18.0785 10.1024ZM7.47731 12.5843C9.95807 10.5895 13.441 10.5895 15.9217 12.5843L16.8617 11.4153C13.832 8.97915 9.56702 8.97915 6.53734 11.4153L7.47731 12.5843ZM5.34281 10.086C8.03641 7.9365 10.6227 7.52956 12.8154 7.84408C15.0378 8.16284 16.9034 9.23173 18.0785 10.1024L18.9715 8.89719C17.6808 7.94087 15.5835 6.72576 13.0284 6.35927C10.4437 5.98854 7.43782 6.4951 4.40719 8.91358L5.34281 10.086Z" fill="#000000"></path> </g></svg>
                                                </div>
                                                <div class="ms-2">
                                                    <div class="text-[17px] font-medium"> Network usage </div>
                                                    <div class="text-gray-700 text-[14px]"> 7.2 GB sent - 13.8 GB received </div>
                                                </div>
                                            </div>

                                        </template>
                                        <template v-if="index === 3">

                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13M12 17H12.01M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Help center or FAQ?
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" stroke-width="1.5" d="M3 5.5C3 14.0604 9.93959 21 18.5 21C18.8862 21 19.2691 20.9859 19.6483 20.9581C20.0834 20.9262 20.3009 20.9103 20.499 20.7963C20.663 20.7019 20.8185 20.5345 20.9007 20.364C21 20.1582 21 19.9181 21 19.438V16.6207C21 16.2169 21 16.015 20.9335 15.842C20.8749 15.6891 20.7795 15.553 20.6559 15.4456C20.516 15.324 20.3262 15.255 19.9468 15.117L16.74 13.9509C16.2985 13.7904 16.0777 13.7101 15.8683 13.7237C15.6836 13.7357 15.5059 13.7988 15.3549 13.9058C15.1837 14.0271 15.0629 14.2285 14.8212 14.6314L14 16C11.3501 14.7999 9.2019 12.6489 8 10L9.36863 9.17882C9.77145 8.93713 9.97286 8.81628 10.0942 8.64506C10.2012 8.49408 10.2643 8.31637 10.2763 8.1317C10.2899 7.92227 10.2096 7.70153 10.0491 7.26005L8.88299 4.05321C8.745 3.67376 8.67601 3.48403 8.55442 3.3441C8.44701 3.22049 8.31089 3.12515 8.15802 3.06645C7.98496 3 7.78308 3 7.37932 3H4.56201C4.08188 3 3.84181 3 3.63598 3.09925C3.4655 3.18146 3.29814 3.33701 3.2037 3.50103C3.08968 3.69907 3.07375 3.91662 3.04189 4.35173C3.01413 4.73086 3 5.11378 3 5.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Contact us
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg class="size-[25px] fill-gray-700" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M21.406,5.086l-9-4a1,1,0,0,0-.812,0l-9,4A1,1,0,0,0,2,6v.7a18.507,18.507,0,0,0,9.515,16.17,1,1,0,0,0,.97,0A18.507,18.507,0,0,0,22,6.7V6A1,1,0,0,0,21.406,5.086ZM20,6.7a16.507,16.507,0,0,1-8,14.141A16.507,16.507,0,0,1,4,6.7V6.65l8-3.556L20,6.65ZM11,10h2v8H11Zm0-4h2V8H11Z"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                Teams and Privacy Policy
                                            </a>
                                            <a href="javascript:void(0)" class="px-5 py-2 flex justify-start items-center text-gray-700 text-[14px] font-medium hover:opacity-65 duration-500">
                                                <span class="me-2">
                                                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path class="stroke-gray-700" stroke-width="1.5" d="M12 18H12.01M9.2 21H14.8C15.9201 21 16.4802 21 16.908 20.782C17.2843 20.5903 17.5903 20.2843 17.782 19.908C18 19.4802 18 18.9201 18 17.8V6.2C18 5.0799 18 4.51984 17.782 4.09202C17.5903 3.71569 17.2843 3.40973 16.908 3.21799C16.4802 3 15.9201 3 14.8 3H9.2C8.0799 3 7.51984 3 7.09202 3.21799C6.71569 3.40973 6.40973 3.71569 6.21799 4.09202C6 4.51984 6 5.07989 6 6.2V17.8C6 18.9201 6 19.4802 6.21799 19.908C6.40973 20.2843 6.71569 20.5903 7.09202 20.782C7.51984 21 8.07989 21 9.2 21Z" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                App info
                                            </a>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full max-w-full min-w-full sm:max-w-[380px] sm:min-w-[380px] h-full absolute xl:static top-0 bottom-0 duration-500 z-20 bg-white xl:bg-transparent" @click.self="isChatSidebarActive = false" :class="{ '-start-[110%] sm:-start-[380px]' : !isChatSidebarActive, 'start-[0px]' : isChatSidebarActive }" id="chatSidebar">
                    <div class="px-5 py-3 text-[25px] flex justify-between xl:justify-start items-center">
                        Chats
                        <button type="button" class="bg-transparent outline-0 border-0 size-[35px] inline-flex xl:hidden justify-center items-center rounded-full hover:bg-white duration-500" @click="closeChatSidebar()">
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
                        <div class="min-w-[45px] min-h-[45px] flex justify-center items-center duration-500 bg-transparent hover:bg-white rounded-full cursor-pointer" @click.stop="openChatSettingsSidebar()">
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
                        <div class="text-[17px] font-medium mb-2"> Messages </div>
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" class="rounded-md" :class="{ 'bg-blue-800 text-white duration-500 hover:bg-blue-950 py-2' : tab === 1, 'bg-white text-blue-950 duration-500 hover:bg-blue-950 py-2 hover:text-white' : tab !== 1 }" @click="tab = 1">
                                Chat
                            </button>
                            <button type="button" class="rounded-md" :class="{ 'bg-blue-800 text-white duration-500 hover:bg-blue-950 py-2' : tab === 2, 'bg-white text-blue-950 duration-500 hover:bg-blue-950 py-2 hover:text-white' : tab !== 2 }" @click="tab = 2">
                                Group
                            </button>
                            <button type="button" class="rounded-md" :class="{ 'bg-blue-800 text-white duration-500 hover:bg-blue-950 py-2' : tab === 3, 'bg-white text-blue-950 duration-500 hover:bg-blue-950 py-2 hover:text-white' : tab !== 3 }" @click="tab = 3">
                                Contact
                            </button>
                        </div>
                    </div>
                    <div class="w-full overflow-y-auto h-[calc(100vh-335px)] px-3 py-3 scrollbar" v-if="tab === 1">
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
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
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-2.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-3.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-4.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-6.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-7.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-8.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                            <img :src="'/images/agent-9.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
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
                    <div class="w-full overflow-y-auto h-[calc(100vh-335px)] px-3 py-3 scrollbar" v-if="tab === 2">
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <div class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] inline-flex justify-center items-center bg-blue-200 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[25px]">
                                    <path class="stroke-blue-950" stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                </svg>
                            </div>
                            <div class="ps-3 flex w-full text-gray-600">
                                Create New Group
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <div class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] inline-flex justify-center items-center bg-yellow-200 rounded-full text-[35px] text-yellow-700">
                                G
                            </div>
                            <div class="ps-3 flex w-full">
                                <div class="w-9/12">
                                    <div class="font-medium text-gray-700 text-[17px]"> General </div>
                                    <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> <span class="text-blue-800"> HG: </span> Good morning everyone! </div> </div>
                                </div>
                                <div class="w-3/12 text-end text-[13px] font-normal text-gray-700">
                                    03:25 PM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full overflow-y-auto h-[calc(100vh-335px)] px-3 py-3 scrollbar" v-if="tab === 3">
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <div class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] inline-flex justify-center items-center bg-blue-200 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[25px]">
                                    <path class="stroke-blue-950" stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                                </svg>
                            </div>
                            <div class="ps-3 flex w-full text-gray-600">
                                Add New Contact
                            </div>
                        </div>
                        <div class="flex justify-start items-center mb-3 bg-transparent duration-500 px-3 py-2 rounded-xl hover:bg-white cursor-pointer">
                            <img :src="'/images/agent-1.jpg'" class="min-w-[45px] sm:min-w-[65px] min-h-[45px] sm:min-h-[65px] size-[45px] sm:size-[65px] object-cover bg-cover object-top bg-top rounded-full" alt="person" />
                            <div class="ps-3 w-full">
                                <div class="font-medium text-gray-700 text-[17px]"> John Doe </div>
                                <div class="text-gray-500 text-[14px]"> <div class="truncate-to-1-line"> Keep going, you got this! </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full bg-gray-200 p-3">
                    <div class="w-full h-full bg-white rounded-xl overflow-hidden">
                        <div class="flex justify-between items-center w-full pe-3">
                            <div class="flex justify-start items-center ps-3 gap-x-2">
                                <button type="button" class="min-w-[55px] min-h-[55px] size-[55px] rounded-full inline-flex xl:hidden justify-center items-center bg-transparent duration-500 hover:bg-gray-300" @click.stop="openChatSidebar()">
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
                                <div class="flex justify-start items-center py-3 bg-transparent pe-3 bg-white">
                                    <img :src="'/images/agent-1.jpg'" class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-top bg-top" alt="">
                                    <div class="flex justify-between items-center w-full">
                                        <div class="ps-3 w-full">
                                            <div class="font-medium text-gray-700 text-[17px]">
                                                John Doe
                                            </div>
                                            <div class="text-green-500 text-[14px] font-medium flex items-center justify-start gap-x-2">
                                                Active <span class="inline-block bg-green-500 h-3 w-3 rounded-full"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative" id="profileChatDropdown">
                                <button type="button" class="outline-0 border-0 inline-flex justify-center items-center size-[45px] rounded-full bg-transparent duration-500 cursor-pointer hover:bg-gray-200" @click.stop="chatDropdownToggle()">
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
                                <ul class="absolute top-auto end-0 w-[170px] h-auto bg-white drop-shadow-xl rounded-lg p-2 mt-2 z-10" v-if="isChatDropdownActive" @click.stop>
                                    <li>
                                        <a href="javascript:void(0)" class="decoration-0 flex justify-start items-center px-3 py-2 bg-transparent duration-500 rounded-lg hover:bg-gray-200 text-[14px]" @click="chatDropdownToggle()">
                                            <span class="inline-flex min-w-[25px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
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
                        <div class="p-3 h-[calc(100vh-305px)]">
                            <div class="w-full bg-gray-100 h-full rounded-xl p-3 overflow-y-auto scrollbar">
                                <div v-for="(message, index) in messages" :key="index" class="flex mb-3" :class="{'justify-start': message.type === 'received', 'justify-end': message.type === 'sent'}">
                                    <div v-if="message.type === 'received'" class="me-2">
                                        <img :src="message.avatar" class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-center bg-center" alt="chat" />
                                    </div>
                                    <div :class="message.type === 'received' ? 'bg-white' : 'bg-blue-800 text-white'" class="px-4 py-2 drop-shadow-xl rounded-lg">
                                        <div class="font-medium"> {{ message.text }} </div>
                                        <div :class="message.type === 'received' ? 'text-gray-600 text-end' : 'text-white text-start'" class="text-[13px] mt-2"> {{ message.time }} </div>
                                    </div>
                                    <div v-if="message.type === 'sent'" class="ms-2">
                                        <img :src="message.avatar" class="size-[35px] sm:size-[55px] min-w-[35px] sm:min-w-[55px] min-h-[35px] sm:min-h-[55px] rounded-full object-cover bg-cover object-center bg-center" alt="chat" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center px-3 gap-x-3">
                            <input type="text" name="message" placeholder="Type Here ..." class="w-full px-5 py-4 rounded-xl outline-0 border-0 bg-gray-200" required autocomplete="off" />
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
            </div>

        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            tab: 1,
            activeTab: null,
            accordionItems: [],
            isChatSettingsSidebarActive: false,
            isChatSidebarActive: false,
            isChatDropdownActive: false,
            messages: [
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "received", avatar: "/images/agent-1.jpg" },
                { text: "Keep going, you got this!", time: "10:30 AM", type: "sent", avatar: "/images/agent-2.jpg" },
            ]
        }
    },
    mounted() {
        window.addEventListener("click", this.handleChatDropdownClose);
        window.addEventListener("click", (event) => this.handleChatSettingsSidebarClose(event))
        window.addEventListener("click", (event) => this.handleChatSidebarClose(event))
    },
    unmounted() {
        window.removeEventListener("click", this.handleChatDropdownClose);
        window.removeEventListener("click", this.handleChatSettingsSidebarClose);
        window.removeEventListener("click", this.handleChatSidebarClose);
    },
    methods: {
        setTab(index) {
            this.activeTab = this.activeTab === index ? null : index;
        },
        openChatSettingsSidebar() {
            this.isChatSettingsSidebarActive = true;
            this.isChatSidebarActive = false;
        },
        closeChatSettingsSidebar() {
            this.isChatSettingsSidebarActive = false;
        },
        handleChatSettingsSidebarClose(event) {
            if (!event.target.closest("#chatSettingsSidebar") && this.isChatSettingsSidebarActive) {
                this.isChatSettingsSidebarActive = false;
            }
        },
        openChatSidebar() {
            this.isChatSidebarActive = true;
        },
        closeChatSidebar() {
            this.isChatSidebarActive = false;
        },
        handleChatSidebarClose(event) {
            if (!event.target.closest("#chatSidebar") && this.isChatSidebarActive) {
                this.isChatSidebarActive = false;
            }
        },
        chatDropdownToggle() {
            this.isChatDropdownActive = !this.isChatDropdownActive;
        },
        handleChatDropdownClose() {
            if(!event.target.closest("#profileChatDropdown")) {
                this.isChatDropdownActive = false;
            }
        },

    }
}

</script>
