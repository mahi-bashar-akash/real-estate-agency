<template>

    <div class="px-3 md:px-5">
        <div class="bg-gray-200 px-3 md:px-7 py-3 md:py-5 rounded-2xl w-full">

            <!-- head part -->
            <div class="flex justify-between items-center mb-3">

                <!-- title -->
                <div class="text-[25px]"> Blogs</div>

                <!-- button -->
                <button type="button" @click="openManageModal()"
                   class="bg-[#1c252e] outline-0 border-0 text-white rounded-xl opacity-100 duration-500 hover:opacity-75 h-[45px] w-[100px] text-[15px] inline-flex justify-center items-center">
                    Add
                </button>

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

                        <!-- blog card -->
                        <div class="decoration-0 w-full">
                            <div
                                class="border bg-white duration-500 rounded-xl overflow-hidden hover:shadow-xl group relative">

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
                                                   @click="dropdownToggle(index);openManageModal()">
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
                                                   @click="dropdownToggle(index);openDeleteModal()">
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

                                    <!-- blog card image -->
                                    <img :src="'/images/properties-2.jpg'"
                                         class="object-cover bg-cover w-full h-[250px]" alt="properties"/>

                                </div>
                                <div class="w-full p-7 flex justify-between flex-col">
                                    <div class="mb-3">
                                        <div class="mb-3 text-[21px]">

                                            <!-- blog card title -->
                                            <div class="truncate-to-1-line">
                                                Modern Apartment
                                            </div>
                                        </div>
                                        <div class="text-[13px]">

                                            <!-- blog card description -->
                                            <div class="text-gray-500 mb-3">
                                                4936 N Broadway St, Chicago, IL 60640, USA
                                            </div>

                                        </div>

                                        <div class="text-[15px] text-gray-700">
                                            <div class="truncate-to-2-line">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ducimus eius fugiat harum impedit incidunt laudantium minima obcaecati officiis optio placeat, quae similique sint suscipit totam vel veniam veritatis vitae! Accusantium amet architecto cumque dicta doloremque, eaque eius fugit id iure modi nihil perferendis placeat, quasi quia vero voluptate voluptates. Asperiores ducimus illo laudantium magnam, magni quasi recusandae repellat similique veritatis voluptate. Ab beatae debitis delectus doloremque ducimus eum eveniet facilis fuga inventore labore, laboriosam minus nisi nulla optio, pariatur perspiciatis, quaerat quis rerum velit veniam. Adipisci aperiam, aut consequuntur culpa doloribus eaque, nemo quia rem, repellat reprehenderit repudiandae rerum sed sint ut voluptatum? Animi assumenda cupiditate expedita fuga fugiat ipsum iste laboriosam, molestiae necessitatibus voluptatibus. Delectus est nihil quidem.
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

    <!-- manage modal -->
    <div class="fixed inset-0 size-full flex justify-center items-center duration-500 z-50" :class="{ 'invisible bg-black/35' : !isManageModal, 'visible bg-black/65' : isManageModal }" @click="isManageModal = false">
        <form @submit.prevent="manageApi()" class="bg-white rounded-2xl w-full max-w-[550px] p-5 duration-500 origin-top" :class="{ '-translate-y-1/2 opacity-0' : !isManageModal, 'translate-y-0 opacity-100' : isManageModal }" @click.stop>
            <div class="flex justify-between items-center mb-3">
                <div class="text-[22px]"> <span v-if="id === null"> Create </span> <span v-if="id !== null"> Edit </span> Blog </div>
                <button type="button" class="size-[35px] inline-flex justify-center items-center" @click="closeManageModal()">
                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path class="stroke-black" d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-black" d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="w-full mb-3">
                <div class="mb-3 w-full">
                    <label for="upload-thumbnail" class="w-full flex bg-gray-200 rounded-lg justify-center items-center h-[200px] text-[21px] cursor-pointer">
                        <input type="file" name="upload-thumbnail" id="upload-thumbnail" hidden="hidden">
                        Upload Thumbnail
                    </label>
                </div>
                <div class="mb-3 w-full">
                    <label for="blog-title" class="block mb-1 w-full"> Blog Title: </label>
                    <input id="blog-title" type="text" name="blog-title" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
                </div>
                <div class="mb-3 w-full">
                    <label for="blog-tag" class="block mb-1 w-full"> Blog Tag: </label>
                    <input id="blog-tag" type="text" name="blog-tag" class="w-full px-4 py-3 outline-0 border border-gray-300 block rounded-lg duration-500 focus-within:border-blue-800" required autocomplete="off" />
                </div>
                <div class="w-full">
                    <label for="blog-description" class="block mb-1 w-full"> Blog Description: </label>
                    <textarea name="blog-description" id="blog-description" cols="30" rows="5" class="w-full p-4 outline-0 border border-gray-300 block rounded-lg" required autocomplete="off"></textarea>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2">
                <button type="button" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-gray-200 duration-500 text-gray-700 hover:bg-gray-700 hover:text-white rounded-lg" @click="closeManageModal()">
                    Cancel
                </button>
                <button type="submit" class="min-w-[130px] px-5 py-2 inline-flex justify-center items-center bg-blue-200 duration-500 text-blue-700 hover:bg-blue-800 hover:text-white rounded-lg">
                    <span v-if="id === null"> Save </span> <span v-if="id !== null"> Update </span>
                </button>
            </div>
        </form>
    </div>

    <!-- delete modal -->
    <div class="fixed inset-0 size-full flex justify-center items-center duration-500 z-50" :class="{ 'invisible bg-black/35' : !isDeleteModal, 'visible bg-black/65' : isDeleteModal }" @click="isDeleteModal = false">
        <form @submit.prevent="deleteApi()" class="bg-white rounded-2xl w-full max-w-[450px] p-5 duration-500 origin-top" :class="{ '-translate-y-1/2 opacity-0' : !isDeleteModal, 'translate-y-0 opacity-100' : isDeleteModal }" @click.stop>
            <div class="flex justify-between items-center mb-3">
                <div class="text-[22px]"> Delete Blog </div>
                <button type="button" class="size-[35px] inline-flex justify-center items-center" @click="closeDeleteModal()">
                    <svg viewBox="0 0 24 24" class="size-[25px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path class="stroke-black" d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke-width="1.5" stroke-linecap="round"></path>
                            <path class="stroke-black" d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </button>
            </div>
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
            isDropdownActive: false,
            isManageModal: false,
            isDeleteModal: false,
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

        // Manage api implementation
        manageApi() {

        },

        // Delete api implementation
        deleteApi() {

        },

    }
}

</script>
