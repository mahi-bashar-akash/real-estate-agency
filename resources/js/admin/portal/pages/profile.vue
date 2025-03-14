<template>

    <div class="w-full h-[calc(100vh-130px)] flex justify-center items-center">
        <div class="max-w-[470px] w-full bg-blue-50 drop-shadow-2xl rounded-xl">
            <div class="flex justify-center w-full pt-5">
                <div class="size-[250px] rounded-full bg-gradient-to-tl from-blue-400 to-blue-950 inline-flex justify-center items-center text-white text-[65px]">
                    MBA
                </div>
            </div>
            <div class="pt-5 px-5 block font-bold text-[17px]"> Name </div>
            <div class="my-2 px-5 block font-medium text-[15px]">
                <template v-if="profileData?.name">
                    {{profileData?.name}}
                </template>
                <template v-else>
                    <span class="text-blue-800">
                        Null
                    </span>
                </template>
            </div>
            <div class="my-2 px-5 block font-bold text-[17px]"> Email </div>
            <div class="my-2 px-5 block font-medium text-[15px]">
                <template v-if="profileData?.email">
                    {{profileData?.email}}
                </template>
                <template v-else>
                    <span class="text-blue-800">
                        Null
                    </span>
                </template>
            </div>
            <div class="my-2 px-5 block font-bold text-[17px]"> Phone Number </div>
            <div class="my-2 px-5 block font-medium text-[15px]">
                <template v-if="profileData?.phone">
                    {{profileData?.phone}}
                </template>
                <template v-else>
                    <span class="text-blue-800">
                        Null
                    </span>
                </template>
            </div>
            <div class="my-2 px-5 block font-bold text-[17px]"> Preset Address </div>
            <div class="my-2 px-5 block font-medium text-[15px]">
                <template v-if="profileData?.preset_address">
                    {{profileData?.preset_address}}
                </template>
                <template v-else>
                    <span class="text-blue-800">
                        Null
                    </span>
                </template>
            </div>
            <div class="grid grid-cols-2 gap-2 pb-3 px-5 mt-4">
                <button type="button" class="bg-blue-600 rounded-lg duration-500 hover:bg-blue-800 p-3 flex justify-center items-center text-white" @click="toggleEditModal()">
                    Edit Profile
                </button>
                <button type="button" class="bg-blue-600 rounded-lg duration-500 hover:bg-blue-800 p-3 flex justify-center items-center text-white" @click="toggleChangePassword()">
                    Change Password
                </button>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 p-10 size-full flex justify-center items-center duration-500 z-50" :class="{ 'invisible bg-black/35' : !editModal, 'visible bg-black/65' : editModal }" @click="editModal = false">
        <div class="bg-white rounded-2xl w-full max-w-[450px] duration-500 origin-top p-10" :class="{ 'translate-y-0 opacity-100' : editModal, '-translate-y-1/2 opacity-0' : !editModal }" @click.stop>
            <form @submit.prevent="changeDetails()">
                <div class="flex justify-between items-center mb-3">
                    <div class="text-[21px] font-medium"> Edit Profile </div>
                    <button type="button" class="size-[35px] inline-flex justify-center items-center rounded-full bg-gray-100 duration-500 hover:bg-gray-300" @click="toggleEditModal()">
                        <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Close_SM"> <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                    </button>
                </div>
                <div class="mb-5 w-full">
                    <div class="mb-3 w-full block">
                        <label for="name" class="block mb-1 text-blue-950">Name</label>
                        <input id="name" type="text" name="name" v-model="profileParam.name" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="email" class="block mb-1 text-blue-950"> Email </label>
                        <input id="email" type="email" name="email" v-model="profileParam.email" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="phone" class="block mb-1 text-blue-950"> Phone Number </label>
                        <input id="phone" type="text" name="phone" v-model="profileParam.phone" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="preset_address" class="block mb-1 text-blue-950"> Preset Address </label>
                        <input id="preset_address" type="text" name="preset_address" v-model="profileParam.preset_address" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="bio" class="block mb-1 text-blue-950"> Bio </label>
                        <textarea name="bio" id="bio" v-model="profileParam.bio" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" cols="30" rows="5" autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-3">
                    <button type="button" class="bg-gray-200 duration-500 hover:bg-gray-600 text-gray-950 hover:text-white py-3 px-6 rounded-xl" @click="toggleEditModal()">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-200 duration-500 hover:bg-blue-600 text-blue-950 hover:text-white py-3 px-6 rounded-xl">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="fixed inset-0 p-10 size-full flex justify-center items-center duration-500 z-50" :class="{ 'invisible bg-black/35' : !changePasswordModal, 'visible bg-black/65' : changePasswordModal }" @click="changePasswordModal = false">
        <div class="bg-white rounded-2xl w-full max-w-[450px] duration-500 origin-top p-10" :class="{ 'translate-y-0 opacity-100' : changePasswordModal, '-translate-y-1/2 opacity-0' : !changePasswordModal }" @click.stop>
            <form @submit.prevent="changePassword()">
                <div class="flex justify-between items-center mb-3">
                    <div class="text-[21px] font-medium"> Change Password </div>
                    <button type="button" class="size-[35px] inline-flex justify-center items-center rounded-full bg-gray-100 duration-500 hover:bg-gray-300" @click="toggleChangePassword()">
                        <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Close_SM"> <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                    </button>
                </div>
                <div class="mb-5 w-full">
                    <div class="mb-3 w-full block">
                        <label for="current_password" class="block mb-1 text-blue-950"> Current Password </label>
                        <div class="w-full relative">
                            <input id="current_password" :type="currentPasswordFieldType" name="current_password" v-model="passwordParam.current_password" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                            <div class="absolute end-0 top-0 bottom-0 pe-3">
                                <button type="button" class="bg-transparent border-0 group outline-0 size-[25px] flex justify-end items-center h-full" @click="currentPasswordVisibility()">
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="currentPasswordFieldType === 'text'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"></path>
                                        </g>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="currentPasswordFieldType === 'password'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L14.032 8.55382C13.4365 8.20193 12.7418 8 12 8C9.79086 8 8 9.79086 8 12C8 12.7418 8.20193 13.4365 8.55382 14.032L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L9.96803 15.4462C10.5635 15.7981 11.2582 16 12 16C14.2091 16 16 14.2091 16 12C16 11.2582 15.7981 10.5635 15.4462 9.96803L19.7071 5.70711ZM12.518 10.0677C12.3528 10.0236 12.1792 10 12 10C10.8954 10 10 10.8954 10 12C10 12.1792 10.0236 12.3528 10.0677 12.518L12.518 10.0677ZM11.482 13.9323L13.9323 11.482C13.9764 11.6472 14 11.8208 14 12C14 13.1046 13.1046 14 12 14C11.8208 14 11.6472 13.9764 11.482 13.9323ZM15.7651 4.8207C14.6287 4.32049 13.3675 4 12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C1.92276 13.7326 2.86706 15.0637 4.21194 16.3739L5.62626 14.9596C4.4555 13.8229 3.61144 12.6531 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C12.7719 6 13.5135 6.13385 14.2193 6.36658L15.7651 4.8207ZM12 18C11.2282 18 10.4866 17.8661 9.78083 17.6334L8.23496 19.1793C9.37136 19.6795 10.6326 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C22.0773 10.2674 21.133 8.93627 19.7881 7.62611L18.3738 9.04043C19.5446 10.1771 20.3887 11.3469 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18Z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-1 text-rose-700 text-[13px]" v-if="error.current_password"> {{error.current_password[0]}} </div>
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="new_password" class="block mb-1 text-blue-950"> New Password </label>
                        <div class="w-full relative">
                            <input id="new_password" :type="newPasswordFieldType" name="new_password" v-model="passwordParam.new_password" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                            <div class="absolute end-0 top-0 bottom-0 pe-3">
                                <button type="button" class="bg-transparent border-0 group outline-0 size-[25px] flex justify-end items-center h-full" @click="newPasswordVisibility()">
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="newPasswordFieldType === 'text'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"></path>
                                        </g>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="newPasswordFieldType === 'password'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L14.032 8.55382C13.4365 8.20193 12.7418 8 12 8C9.79086 8 8 9.79086 8 12C8 12.7418 8.20193 13.4365 8.55382 14.032L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L9.96803 15.4462C10.5635 15.7981 11.2582 16 12 16C14.2091 16 16 14.2091 16 12C16 11.2582 15.7981 10.5635 15.4462 9.96803L19.7071 5.70711ZM12.518 10.0677C12.3528 10.0236 12.1792 10 12 10C10.8954 10 10 10.8954 10 12C10 12.1792 10.0236 12.3528 10.0677 12.518L12.518 10.0677ZM11.482 13.9323L13.9323 11.482C13.9764 11.6472 14 11.8208 14 12C14 13.1046 13.1046 14 12 14C11.8208 14 11.6472 13.9764 11.482 13.9323ZM15.7651 4.8207C14.6287 4.32049 13.3675 4 12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C1.92276 13.7326 2.86706 15.0637 4.21194 16.3739L5.62626 14.9596C4.4555 13.8229 3.61144 12.6531 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C12.7719 6 13.5135 6.13385 14.2193 6.36658L15.7651 4.8207ZM12 18C11.2282 18 10.4866 17.8661 9.78083 17.6334L8.23496 19.1793C9.37136 19.6795 10.6326 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C22.0773 10.2674 21.133 8.93627 19.7881 7.62611L18.3738 9.04043C19.5446 10.1771 20.3887 11.3469 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18Z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-1 text-rose-700 text-[13px]" v-if="error.new_password"> {{error.new_password[0]}} </div>
                    </div>
                    <div class="mb-3 w-full block">
                        <label for="new_confirm_password" class="block mb-1 text-blue-950">New Confirm Password</label>
                        <div class="w-full relative">
                            <input id="new_confirm_password" :type="newConfirmPasswordFieldType" name="new_confirm_password" v-model="passwordParam.new_confirm_password" class="w-full block px-5 py-3 outline-0 border border-gray-300 duration-500 focus-within:border-gray-950 rounded-xl" autocomplete="off" />
                            <div class="absolute end-0 top-0 bottom-0 pe-3">
                                <button type="button" class="bg-transparent border-0 group outline-0 size-[25px] flex justify-end items-center h-full" @click="newConfirmPasswordVisibility()">
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="newConfirmPasswordFieldType === 'text'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M6.30147 15.5771C4.77832 14.2684 3.6904 12.7726 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C14.1843 6 16.1261 7.07185 17.6986 8.42294C19.2218 9.73158 20.3097 11.2274 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18C9.81574 18 7.87402 16.9282 6.30147 15.5771ZM12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C2.00757 13.8624 3.23268 15.5772 4.99812 17.0941C6.75717 18.6054 9.14754 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C21.9925 10.1376 20.7674 8.42276 19.002 6.90595C17.2429 5.39462 14.8525 4 12 4ZM10 12C10 10.8954 10.8955 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8955 14 10 13.1046 10 12ZM12 8C9.7909 8 8.00004 9.79086 8.00004 12C8.00004 14.2091 9.7909 16 12 16C14.2092 16 16 14.2091 16 12C16 9.79086 14.2092 8 12 8Z"></path>
                                        </g>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="size-[20px]" fill="none" xmlns="http://www.w3.org/2000/svg" v-if="newConfirmPasswordFieldType === 'password'">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path class="fill-blue-600 duration-500 group-hover:fill-blue-950" fill-rule="evenodd" clip-rule="evenodd" d="M19.7071 5.70711C20.0976 5.31658 20.0976 4.68342 19.7071 4.29289C19.3166 3.90237 18.6834 3.90237 18.2929 4.29289L14.032 8.55382C13.4365 8.20193 12.7418 8 12 8C9.79086 8 8 9.79086 8 12C8 12.7418 8.20193 13.4365 8.55382 14.032L4.29289 18.2929C3.90237 18.6834 3.90237 19.3166 4.29289 19.7071C4.68342 20.0976 5.31658 20.0976 5.70711 19.7071L9.96803 15.4462C10.5635 15.7981 11.2582 16 12 16C14.2091 16 16 14.2091 16 12C16 11.2582 15.7981 10.5635 15.4462 9.96803L19.7071 5.70711ZM12.518 10.0677C12.3528 10.0236 12.1792 10 12 10C10.8954 10 10 10.8954 10 12C10 12.1792 10.0236 12.3528 10.0677 12.518L12.518 10.0677ZM11.482 13.9323L13.9323 11.482C13.9764 11.6472 14 11.8208 14 12C14 13.1046 13.1046 14 12 14C11.8208 14 11.6472 13.9764 11.482 13.9323ZM15.7651 4.8207C14.6287 4.32049 13.3675 4 12 4C9.14754 4 6.75717 5.39462 4.99812 6.90595C3.23268 8.42276 2.00757 10.1376 1.46387 10.9698C1.05306 11.5985 1.05306 12.4015 1.46387 13.0302C1.92276 13.7326 2.86706 15.0637 4.21194 16.3739L5.62626 14.9596C4.4555 13.8229 3.61144 12.6531 3.18002 12C3.6904 11.2274 4.77832 9.73158 6.30147 8.42294C7.87402 7.07185 9.81574 6 12 6C12.7719 6 13.5135 6.13385 14.2193 6.36658L15.7651 4.8207ZM12 18C11.2282 18 10.4866 17.8661 9.78083 17.6334L8.23496 19.1793C9.37136 19.6795 10.6326 20 12 20C14.8525 20 17.2429 18.6054 19.002 17.0941C20.7674 15.5772 21.9925 13.8624 22.5362 13.0302C22.947 12.4015 22.947 11.5985 22.5362 10.9698C22.0773 10.2674 21.133 8.93627 19.7881 7.62611L18.3738 9.04043C19.5446 10.1771 20.3887 11.3469 20.8201 12C20.3097 12.7726 19.2218 14.2684 17.6986 15.5771C16.1261 16.9282 14.1843 18 12 18Z"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-1 text-rose-700 text-[13px]" v-if="error.new_confirm_password"> {{error.new_confirm_password[0]}} </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-3">
                    <button type="button" class="bg-gray-200 duration-500 hover:bg-gray-600 text-gray-950 hover:text-white py-3 px-6 rounded-xl" @click="toggleChangePassword()">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-200 duration-500 hover:bg-blue-600 text-blue-950 hover:text-white py-3 px-6 rounded-xl">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

</template>

<script>

import axios from "axios";

export default {
    data(){
        return {
            editModal: false,
            changePasswordModal: false,
            profileData: null,
            token: localStorage.getItem('token'),
            user_type: localStorage.getItem('user_type'),
            profileParam: {
                name: '',
                phone: '',
                preset_address: '',
                bio: '',
            },
            passwordParam: {
                current_password: '',
                new_password: '',
                new_confirm_password: '',
            },
            profileLoading: false,
            passwordLoading: false,
            error: {},
            password: '',
            currentPasswordFieldType: 'password',
            newPasswordFieldType: 'password',
            newConfirmPasswordFieldType: 'password',
        }
    },
    mounted() {
        this.getProfile();
    },
    methods: {

        currentPasswordVisibility() {
            this.currentPasswordFieldType = this.currentPasswordFieldType === "password" ? "text" : "password";
        },

        newPasswordVisibility() {
            this.newPasswordFieldType = this.newPasswordFieldType === "password" ? "text" : "password";
        },

        newConfirmPasswordVisibility() {
            this.newConfirmPasswordFieldType = this.newConfirmPasswordFieldType === "password" ? "text" : "password";
        },

        toggleEditModal() {
            this.editModal = !this.editModal;
        },

        toggleChangePassword() {
            this.error = {};
            this.changePasswordModal = !this.changePasswordModal;
        },

        async getProfile() {
            this.loading = true;
            if (!this.token) { this.$router.push({ name: 'signIn' }); return; }
            axios.post('/api/profile/details', null, {headers: {'Content-Type': 'application/json; charset=utf-8', 'Authorization': `Bearer ${this.token}`}}).then(response => {
                this.profileData = response.data.user;
                this.profileParam = JSON.parse(JSON.stringify(response.data.user));
            }).catch(error => {
                console.error("Error fetching profile:", error.response?.data?.message);
                if (error.response?.status === 401) {
                    localStorage.removeItem('token');
                    localStorage.removeItem('user_type');
                    this.$router.push({ name: 'signIn' });
                } else {
                    this.error = error.response?.data?.message || "Failed to fetch profile.";
                }
            }).finally(() => {
                this.loading = false;
            });
        },

        async changeDetails() {
            this.profileLoading = true;
            const token = localStorage.getItem('token');
            axios.post('/api/profile/change-details', this.profileParam, {headers: {'Content-Type': 'application/json; charset=utf-8', 'Authorization' : `Bearer ${token}`}}).then(response => {
                this.getProfile();
                this.toggleEditModal();
            }).finally(() => {
                this.profileLoading = false;
            })
        },

        async changePassword() {
            this.passwordLoading = true;
            this.profileLoading = true;
            const token = localStorage.getItem('token');
            axios.post('/api/profile/change-password', this.passwordParam, {headers: {'Content-Type': 'application/json; charset=utf-8', 'Authorization' : `Bearer ${token}`}}).then(response => {
                this.getProfile();
                this.toggleChangePassword();
            }).catch((error) => {
                this.error = error.response.data.errors;
            }).finally(() => {
                this.profileLoading = false;
            })
        },

    }
}

</script>
