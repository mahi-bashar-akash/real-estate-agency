<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 px-3 md:px-7 py-3 md:py-5 rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Properties</div>

                <!-- button -->
                <a href="javascript:void(0)"
                   class="bg-[#1c252e] text-white rounded-xl opacity-100 duration-500 hover:opacity-75 h-[45px] w-[100px] text-[15px] inline-flex justify-center items-center">
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
            <div class="h-[calc(100vh-340px)] overflow-y-auto py-3 pe-3 scrollbar">
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-4">

                    <template v-for="(each, index) in 20">

                        <!-- Property card -->
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
                                                <a href="javascript:void(0)"
                                                   class="decoration-0 flex justify-start items-center px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl"
                                                   @click="dropdownToggle(index)">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>
                                                    </span>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"
                                                   class="decoration-0 flex justify-start items-center px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl"
                                                   @click="dropdownToggle(index)">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                        </svg>
                                                    </span>
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"
                                                   class="decoration-0 flex justify-start items-center text-rose-600 px-4 py-2 duration-500 bg-transparent hover:bg-gray-200 rounded-xl"
                                                   @click="dropdownToggle(index)">
                                                    <span class="min-w-[30px] inline-flex justify-start items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[20px]">
                                                          <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </span>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="w-full">

                                    <!-- Property card image -->
                                    <img :src="'/images/properties-1.jpg'"
                                         class="object-cover bg-cover w-full h-[250px]" alt="properties"/>

                                </div>
                                <div class="w-full p-7 flex justify-between flex-col">
                                    <div class="mb-3">
                                        <div class="mb-3 text-[21px]">

                                            <!-- Property card title -->
                                            <div class="truncate-to-1-line">
                                                Modern Apartment
                                            </div>
                                        </div>
                                        <div class="text-[13px]">

                                            <!-- Property card description -->
                                            <div class="text-gray-500">
                                                4936 N Broadway St, Chicago, IL 60640, USA
                                            </div>

                                        </div>

                                        <div class="flex justify-start items-center text-[15px] gap-x-3 mt-3">

                                            <!-- bed count -->
                                            <div class="flex justify-start items-center">

                                                <svg class="fill-black size-[15px]" viewBox="0 0 50 50"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M5 10C3.355469 10 2 11.355469 2 13L2 28.1875C2.003906 28.25 2.015625 28.3125 2.03125 28.375C2.03125 28.386719 2.03125 28.394531 2.03125 28.40625C1.582031 29.113281 1.214844 29.867188 0.9375 30.6875C0.316406 32.519531 0.0507813 34.621094 0 37L0 38C0 38.03125 0 38.0625 0 38.09375L0 50L7 50L7 46C7 45.167969 7.203125 44.734375 7.46875 44.46875C7.734375 44.203125 8.167969 44 9 44L41 44C41.832031 44 42.265625 44.203125 42.53125 44.46875C42.796875 44.734375 43 45.167969 43 46L43 50L50 50L50 38.15625C50.003906 38.105469 50.003906 38.050781 50 38C50 37.65625 50.007813 37.332031 50 37C49.949219 34.621094 49.683594 32.519531 49.0625 30.6875C48.785156 29.875 48.414063 29.136719 47.96875 28.4375C47.988281 28.355469 48 28.273438 48 28.1875L48 13C48 11.355469 46.644531 10 45 10 Z M 5 12L45 12C45.5625 12 46 12.4375 46 13L46 26.15625C45.753906 25.949219 45.492188 25.75 45.21875 25.5625C44.550781 25.101563 43.824219 24.671875 43 24.3125L43 20C43 19.296875 42.539063 18.75 42.03125 18.40625C41.523438 18.0625 40.902344 17.824219 40.125 17.625C38.570313 17.226563 36.386719 17 33.5 17C30.613281 17 28.429688 17.226563 26.875 17.625C26.117188 17.820313 25.5 18.042969 25 18.375C24.5 18.042969 23.882813 17.820313 23.125 17.625C21.570313 17.226563 19.386719 17 16.5 17C13.613281 17 11.429688 17.226563 9.875 17.625C9.097656 17.824219 8.476563 18.0625 7.96875 18.40625C7.460938 18.75 7 19.296875 7 20L7 24.3125C6.175781 24.671875 5.449219 25.101563 4.78125 25.5625C4.507813 25.75 4.246094 25.949219 4 26.15625L4 13C4 12.4375 4.4375 12 5 12 Z M 16.5 19C19.28125 19 21.34375 19.234375 22.625 19.5625C23.265625 19.726563 23.707031 19.925781 23.90625 20.0625C23.988281 20.117188 23.992188 20.125 24 20.125L24 22C17.425781 22.042969 12.558594 22.535156 9 23.625L9 20.125C9.007813 20.125 9.011719 20.117188 9.09375 20.0625C9.292969 19.925781 9.734375 19.726563 10.375 19.5625C11.65625 19.234375 13.71875 19 16.5 19 Z M 33.5 19C36.28125 19 38.34375 19.234375 39.625 19.5625C40.265625 19.726563 40.707031 19.925781 40.90625 20.0625C40.988281 20.117188 40.992188 20.125 41 20.125L41 23.625C37.441406 22.535156 32.574219 22.042969 26 22L26 20.125C26.007813 20.125 26.011719 20.117188 26.09375 20.0625C26.292969 19.925781 26.734375 19.726563 27.375 19.5625C28.65625 19.234375 30.71875 19 33.5 19 Z M 24.8125 24C24.917969 24.015625 25.019531 24.015625 25.125 24C25.15625 24 25.1875 24 25.21875 24C35.226563 24.015625 41.007813 25.0625 44.09375 27.1875C45.648438 28.257813 46.589844 29.585938 47.1875 31.34375C47.707031 32.875 47.917969 34.761719 47.96875 37L2.03125 37C2.082031 34.761719 2.292969 32.875 2.8125 31.34375C3.410156 29.585938 4.351563 28.257813 5.90625 27.1875C8.992188 25.058594 14.785156 24.011719 24.8125 24 Z M 2 39L48 39L48 48L45 48L45 46C45 44.832031 44.703125 43.765625 43.96875 43.03125C43.234375 42.296875 42.167969 42 41 42L9 42C7.832031 42 6.765625 42.296875 6.03125 43.03125C5.296875 43.765625 5 44.832031 5 46L5 48L2 48Z"></path>
                                                    </g>
                                                </svg>

                                                <span class="ms-2"> 2 </span>
                                            </div>

                                            <!-- bath count -->
                                            <div class="flex justify-start items-center">

                                                <svg viewBox="0 0 45 45" class="size-[15px]" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path class="stroke-black"
                                                              d="M27.7812 11.002V9.002C27.7812 7.897 26.8863 7.002 25.7812 7.002H14.7812C13.6762 7.002 12.7812 7.897 12.7812 9.002V36.002"
                                                              stroke-width="2"></path>
                                                        <path class="stroke-black"
                                                              d="M33.7812 11.002H21.7812V15.002H33.7812V11.002Z"
                                                              stroke-width="2" stroke-linejoin="round"></path>
                                                        <path class="stroke-black" d="M18.7812 15.002H36.7812"
                                                              stroke-width="2" stroke-linejoin="round"></path>
                                                        <path class="fill-black"
                                                              d="M27.7812 18.002C27.2292 18.002 26.7812 18.45 26.7812 19.002C26.7812 19.554 27.2292 20.002 27.7812 20.002C28.3333 20.002 28.7812 19.554 28.7812 19.002C28.7812 18.45 28.3333 18.002 27.7812 18.002ZM22.7812 18.002C22.2293 18.002 21.7812 18.45 21.7812 19.002C21.7812 19.554 22.2293 20.002 22.7812 20.002C23.3333 20.002 23.7812 19.554 23.7812 19.002C23.7812 18.45 23.3333 18.002 22.7812 18.002ZM32.7812 18.002C32.2292 18.002 31.7812 18.45 31.7812 19.002C31.7812 19.554 32.2292 20.002 32.7812 20.002C33.3333 20.002 33.7812 19.554 33.7812 19.002C33.7812 18.45 33.3333 18.002 32.7812 18.002ZM27.7812 22.002C27.2292 22.002 26.7812 22.45 26.7812 23.002C26.7812 23.554 27.2292 24.002 27.7812 24.002C28.3333 24.002 28.7812 23.554 28.7812 23.002C28.7812 22.45 28.3333 22.002 27.7812 22.002ZM32.7812 22.002C32.2292 22.002 31.7812 22.45 31.7812 23.002C31.7812 23.554 32.2292 24.002 32.7812 24.002C33.3333 24.002 33.7812 23.554 33.7812 23.002C33.7812 22.45 33.3333 22.002 32.7812 22.002ZM22.7812 22.002C22.2293 22.002 21.7812 22.45 21.7812 23.002C21.7812 23.554 22.2293 24.002 22.7812 24.002C23.3333 24.002 23.7812 23.554 23.7812 23.002C23.7812 22.45 23.3333 22.002 22.7812 22.002ZM27.7812 26.002C27.2292 26.002 26.7812 26.45 26.7812 27.002C26.7812 27.554 27.2292 28.002 27.7812 28.002C28.3333 28.002 28.7812 27.554 28.7812 27.002C28.7812 26.45 28.3333 26.002 27.7812 26.002ZM32.7812 26.002C32.2292 26.002 31.7812 26.45 31.7812 27.002C31.7812 27.554 32.2292 28.002 32.7812 28.002C33.3333 28.002 33.7812 27.554 33.7812 27.002C33.7812 26.45 33.3333 26.002 32.7812 26.002ZM22.7812 26.002C22.2293 26.002 21.7812 26.45 21.7812 27.002C21.7812 27.554 22.2293 28.002 22.7812 28.002C23.3333 28.002 23.7812 27.554 23.7812 27.002C23.7812 26.45 23.3333 26.002 22.7812 26.002ZM27.7812 30.002C27.2292 30.002 26.7812 30.45 26.7812 31.002C26.7812 31.554 27.2292 32.002 27.7812 32.002C28.3333 32.002 28.7812 31.554 28.7812 31.002C28.7812 30.45 28.3333 30.002 27.7812 30.002ZM32.7812 30.002C32.2292 30.002 31.7812 30.45 31.7812 31.002C31.7812 31.554 32.2292 32.002 32.7812 32.002C33.3333 32.002 33.7812 31.554 33.7812 31.002C33.7812 30.45 33.3333 30.002 32.7812 30.002ZM22.7812 30.002C22.2293 30.002 21.7812 30.45 21.7812 31.002C21.7812 31.554 22.2293 32.002 22.7812 32.002C23.3333 32.002 23.7812 31.554 23.7812 31.002C23.7812 30.45 23.3333 30.002 22.7812 30.002ZM27.7812 34.002C27.2292 34.002 26.7812 34.45 26.7812 35.002C26.7812 35.554 27.2292 36.002 27.7812 36.002C28.3333 36.002 28.7812 35.554 28.7812 35.002C28.7812 34.45 28.3333 34.002 27.7812 34.002ZM32.7812 34.002C32.2292 34.002 31.7812 34.45 31.7812 35.002C31.7812 35.554 32.2292 36.002 32.7812 36.002C33.3333 36.002 33.7812 35.554 33.7812 35.002C33.7812 34.45 33.3333 34.002 32.7812 34.002ZM22.7812 34.002C22.2293 34.002 21.7812 34.45 21.7812 35.002C21.7812 35.554 22.2293 36.002 22.7812 36.002C23.3333 36.002 23.7812 35.554 23.7812 35.002C23.7812 34.45 23.3333 34.002 22.7812 34.002Z"
                                                              fill="#3C3C3C"></path>
                                                        <path
                                                            d="M32.7812 18.002C32.2292 18.002 31.7812 18.45 31.7812 19.002C31.7812 19.554 32.2292 20.002 32.7812 20.002C33.3333 20.002 33.7812 19.554 33.7812 19.002C33.7812 18.45 33.3333 18.002 32.7812 18.002ZM27.7812 18.002C27.2293 18.002 26.7812 18.45 26.7812 19.002C26.7812 19.554 27.2293 20.002 27.7812 20.002C28.3333 20.002 28.7812 19.554 28.7812 19.002C28.7812 18.45 28.3333 18.002 27.7812 18.002ZM32.7812 22.002C32.2292 22.002 31.7812 22.45 31.7812 23.002C31.7812 23.554 32.2292 24.002 32.7812 24.002C33.3333 24.002 33.7812 23.554 33.7812 23.002C33.7812 22.45 33.3333 22.002 32.7812 22.002ZM27.7812 22.002C27.2293 22.002 26.7812 22.45 26.7812 23.002C26.7812 23.554 27.2293 24.002 27.7812 24.002C28.3333 24.002 28.7812 23.554 28.7812 23.002C28.7812 22.45 28.3333 22.002 27.7812 22.002ZM32.7812 26.002C32.2292 26.002 31.7812 26.45 31.7812 27.002C31.7812 27.554 32.2292 28.002 32.7812 28.002C33.3333 28.002 33.7812 27.554 33.7812 27.002C33.7812 26.45 33.3333 26.002 32.7812 26.002ZM27.7812 26.002C27.2293 26.002 26.7812 26.45 26.7812 27.002C26.7812 27.554 27.2293 28.002 27.7812 28.002C28.3333 28.002 28.7812 27.554 28.7812 27.002C28.7812 26.45 28.3333 26.002 27.7812 26.002ZM32.7812 30.002C32.2292 30.002 31.7812 30.45 31.7812 31.002C31.7812 31.554 32.2292 32.002 32.7812 32.002C33.3333 32.002 33.7812 31.554 33.7812 31.002C33.7812 30.45 33.3333 30.002 32.7812 30.002ZM27.7812 30.002C27.2293 30.002 26.7812 30.45 26.7812 31.002C26.7812 31.554 27.2293 32.002 27.7812 32.002C28.3333 32.002 28.7812 31.554 28.7812 31.002C28.7812 30.45 28.3333 30.002 27.7812 30.002ZM32.7812 34.002C32.2292 34.002 31.7812 34.45 31.7812 35.002C31.7812 35.554 32.2292 36.002 32.7812 36.002C33.3333 36.002 33.7812 35.554 33.7812 35.002C33.7812 34.45 33.3333 34.002 32.7812 34.002ZM27.7812 34.002C27.2293 34.002 26.7812 34.45 26.7812 35.002C26.7812 35.554 27.2293 36.002 27.7812 36.002C28.3333 36.002 28.7812 35.554 28.7812 35.002C28.7812 34.45 28.3333 34.002 27.7812 34.002Z"></path>
                                                    </g>
                                                </svg>

                                                <span class="ms-2"> 2 </span>
                                            </div>

                                            <!-- sq ft count -->
                                            <div class="flex justify-start items-center">

                                                <svg class="fill-black size-[15px]" version="1.1" id="Capa_1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297"
                                                     xml:space="preserve">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                       stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                    <g>
                                                        <path
                                                            d="M285.491,1.703c-4.467-1.284-9.238,0.551-11.699,4.49L101.994,281.069c-2.006,3.209-2.112,7.255-0.276,10.565 c1.834,3.311,5.321,5.365,9.105,5.365h171.798c5.75,0,10.412-4.662,10.412-10.412V11.712 C293.033,7.067,289.956,2.983,285.491,1.703z M272.209,276.176h-13.535v-6.768c0-5.75-4.662-10.412-10.412-10.412 s-10.412,4.662-10.412,10.412v6.768h-24.988v-6.768c0-5.75-4.662-10.412-10.412-10.412s-10.412,4.662-10.412,10.412v6.768h-24.989 v-6.768c0-5.75-4.661-10.412-10.411-10.412s-10.412,4.662-10.412,10.412v6.768H129.61L272.209,48.017V276.176z"></path>
                                                        <path
                                                            d="M193.635,243.53h40.535c5.75,0,10.412-4.661,10.412-10.411V168.26c0-4.645-3.077-8.729-7.542-10.009 c-4.469-1.284-9.237,0.552-11.7,4.49l-40.535,64.859c-2.005,3.21-2.112,7.255-0.276,10.565 C186.362,241.477,189.849,243.53,193.635,243.53z M223.758,204.565v18.142H212.42L223.758,204.565z"></path>
                                                        <path
                                                            d="M217.984,44.632c3.024-4.89,1.517-11.303-3.37-14.331l-46.387-28.74c-2.349-1.453-5.18-1.916-7.866-1.285 c-2.689,0.633-5.018,2.308-6.472,4.656l-4.371,7.063c-20.907-10.192-44.484-12.863-67.43-7.462 c-26.352,6.201-48.715,22.299-62.967,45.328C-8.446,94.412,2.747,152.213,43.364,183.531l-4.377,7.074 c-3.024,4.888-1.517,11.302,3.369,14.33l46.386,28.745c1.66,1.029,3.562,1.563,5.484,1.563c0.796,0,1.596-0.092,2.384-0.277 c2.689-0.632,5.017-2.307,6.471-4.656L217.984,44.632z M36.83,60.82c11.324-18.299,29.092-31.09,50.03-36.018 c17.521-4.122,35.5-2.303,51.618,5.033l-16.061,25.953c-9.116-3.315-19.003-3.928-28.668-1.651 C80.637,57.222,69.512,65.231,62.418,76.69c-12.755,20.615-8.822,46.932,8.05,63.046L54.41,165.684 C23.526,140.51,15.311,95.594,36.83,60.82z M81.853,121.338c-7.299-9.497-8.393-22.919-1.727-33.689 c4.163-6.728,10.695-11.431,18.393-13.241c4.179-0.984,8.43-1.043,12.52-0.23L81.853,121.338z M90.854,210.492l-28.684-17.775 L166.116,24.749l28.685,17.773l-8.193,13.241l-6.606-4.094c-4.889-3.03-11.306-1.522-14.334,3.365 c-3.029,4.888-1.523,11.306,3.365,14.335l6.617,4.101l-14.576,23.553l-6.607-4.093c-4.89-3.027-11.307-1.521-14.335,3.367 c-3.028,4.888-1.522,11.306,3.367,14.335l6.616,4.1l-14.574,23.553l-6.607-4.094c-4.889-3.026-11.307-1.52-14.335,3.368 c-3.027,4.889-1.521,11.306,3.368,14.334l6.616,4.1l-14.576,23.552l-6.604-4.094c-4.889-3.03-11.307-1.523-14.336,3.364 c-3.029,4.888-1.523,11.306,3.364,14.336l6.617,4.102L90.854,210.492z"></path>
                                                    </g>
                                                </g>
                                            </svg>

                                                <span class="ms-2"> 1560 Sq Ft </span>

                                            </div>

                                        </div>

                                    </div>
                                    <div>

                                        <!-- Property card on sale -->
                                        <div class="mb-3">
                                            <div class="mb-1 text-[13px] text-blue-900"> On sale</div>
                                            <div class="text-[18px]"> $540,000</div>
                                        </div>

                                        <!-- Property card on author -->
                                        <div>
                                            <div class="text-[13px] text-blue-900"> By</div>
                                            <div class="text-[18px]"> Maria Villalobos</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </template>

                </div>
            </div>

            <!-- pagination part -->
            <div class="flex justify-center items-center gap-x-2 mt-4 font-medium">
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
