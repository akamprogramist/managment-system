<script setup>
import { Link } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import Dropdown from "../components/Dropdown.vue";
let open = ref(false);
function MenuOpen() {
    open.value = !open.value;
}
let customer = ref(false);
function Menucustomer() {
    customer.value = !customer.value;
}
let accounting = ref(false);
function Menuaccounting() {
    accounting.value = !accounting.value;
}
// const user = computed(() => usePage().props.auth.user);
</script>
<template>
    <nav
        class="fixed shadow-sm top-0 w-full z-10 bg-white border-b border-gray-200"
    >
        <div class="px-3 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center ml-5 space-x-8">
                    <span
                        @click="MenuOpen()"
                        class="md:hidden cursor-pointer text-3xl"
                    >
                        <i
                            :class="[
                                open
                                    ? 'fa-solid fa-xmark pr-[7.5px]'
                                    : 'fa-solid fa-bars',
                            ]"
                        ></i>
                    </span>

                    <span
                        v-if="open"
                        @click="MenuOpen()"
                        class="fixed bg-black opacity-30 w-full h-full right-0 top-[65px]"
                    >
                    </span>
                    <Link href="/">
                        <span
                            class="text-xl font-semibold sm:text-2xl whitespace-nowrap"
                            >System</span
                        >
                    </Link>
                </div>
                <Dropdown title="akam kamal">
                    <template #MenuItem>
                        <div class="capitalize">
                            <Link href="/localNGOs/manage">
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-blue-500 hover:text-white"
                                >
                                    Manage LocalNGOs
                                </div>
                            </Link>
                            <Link href="/users/manage">
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-blue-500 hover:text-white"
                                >
                                    Manage Users
                                </div>
                            </Link>
                            <Link
                                href="/logout"
                                method="delete"
                                as="button"
                                class="w-full"
                            >
                                <div
                                    class="w-full text-left px-5 items-center py-2 text-sm hover:bg-blue-500 hover:text-white"
                                >
                                    Logout
                                </div>
                            </Link>
                        </div>
                    </template>
                </Dropdown>
            </div>
        </div>
    </nav>
    <!-- sidebar  -->
    <aside
        id="logo-sidebar"
        class="fixed capitalize top-[65px] z-50 left-0 w-64 h-screen pt-5 transition-transform bg-white border-r border-gray-200 md:translate-x-0"
        :class="[open ? '' : '-translate-x-full']"
        aria-label="Sidebar"
    >
        <div class="h-full px-3 list-none pb-4 overflow-y-auto bg-white">
            <li>
                <Link
                    href="/"
                    class="flex items-center pl-5 p-2 text-base font-normal text-gray-700 rounded-lg"
                    :class="{
                        'bg-blue-500 text-white': $page.url === '/',
                    }"
                >
                    <i class="fa-solid fa-house text-xl"></i>
                    <span class="ml-3 font-semibold">dashboard</span>
                </Link>
            </li>
            <li>
                <button
                    type="button"
                    class="flex pl-5 items-center w-full p-2 text-base text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-100"
                >
                    <i class="fa-solid fa-user text-xl"></i>
                    <span
                        @click="Menucustomer()"
                        class="flex-1 font-semibold ml-4 text-left whitespace-nowrap"
                        >Customer</span
                    >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <ul class="py-2 space-y-2" :class="[customer ? '' : 'hidden']">
                    <li>
                        <Link
                            href="/customer/create"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >Add Customer</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/customer"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >List Customer</Link
                        >
                    </li>
                </ul>
            </li>
            <li>
                <button
                    type="button"
                    class="flex pl-5 items-center w-full p-2 text-base text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-100"
                >
                    <i class="fa-solid fa-calculator text-xl"></i>
                    <span
                        @click="Menuaccounting()"
                        class="flex-1 font-semibold ml-4 text-left whitespace-nowrap"
                        >Accounting</span
                    >
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <ul
                    id="dropdown-example"
                    class="py-2 space-y-2"
                    :class="[accounting ? '' : 'hidden']"
                >
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >New Deposit</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >New Expense</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >bills</a
                        >
                    </li>
                    <li>
                        <a
                            href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100"
                            >view transactions</a
                        >
                    </li>
                </ul>
            </li>
        </div>
    </aside>
    <div class="bg-[#E8E9F5] ml-64 py-4">
        <slot />
    </div>
</template>
