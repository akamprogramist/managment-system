<template>
    <Card>
        <div class="flex justify-between px-5 py-3 border-b">
            <p>Bills</p>
        </div>
        <div class="flex p-5 items-start gap-5">
            <div><BillSidebar /></div>
            <div class="w-full">
                <div class="flex justify-between items-center px-4 pb-5 w-full">
                    <div class="flex items-center">
                        <label for="search"
                            ><i
                                class="fa-solid fa-search rounded-l-lg bg-gray-100 p-3"
                            ></i
                        ></label>
                        <input
                            type="search"
                            class="border h-10 px-2 outline-none rounded-r-lg focus:border-blue-600"
                            name="search"
                            id="search"
                        />
                    </div>
                </div>
                <div class="bg-white overflow-x-auto px-4">
                    <table class="w-full whitespace">
                        <thead>
                            <tr
                                class="text-left font-semibold capitalize bg-gray-100"
                            >
                                <td class="text-xs px-2 py-2">title</td>
                                <td class="text-xs px-2 py-2">amount</td>
                                <td class="text-xs px-2 py-2">repreat every</td>
                                <td class="text-xs px-2 py-2">next due date</td>
                                <td class="text-xs px-2 py-2">Manage</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="(bill, index) in bills.data"
                                :key="index"
                            >
                                <td class="align-top py-3">
                                    <p
                                        class="px-2 font-semibold text-violet-600 text-sm hover:opacity-50"
                                    >
                                        {{ bill.title }}
                                    </p>
                                </td>
                                <td class="align-top py-3">
                                    <p class="px-2 font-semibold text-sm">
                                        $ {{ bill.amount }}
                                    </p>
                                </td>
                                <td class="align-top py-3">
                                    <p class="px-2 font-semibold text-sm">
                                        {{ bill.repeat }}
                                    </p>
                                </td>
                                <td class="align-top py-3">
                                    <p class="px-2 font-semibold text-sm">
                                        {{ bill.nextduedate }}
                                    </p>
                                </td>
                                <td class="text-white">
                                    <button
                                        @click="destroy(bill.id)"
                                        class="bg-red-500 px-3 py-1.5 rounded-l-md hover:opacity-70"
                                    >
                                        <i
                                            class="fa-solid fa-trash text-sm"
                                        ></i>
                                    </button>
                                    <button
                                        class="bg-blue-400 px-3 py-1.5 rounded-r-md hover:opacity-70"
                                    >
                                        <Link :href="`/bill/${bill.id}/edit`">
                                            <i
                                                class="fa-solid fa-pen text-sm"
                                            ></i>
                                        </Link>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </Card>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import Card from "../components/Card.vue";
import BillSidebar from "../components/BillSidebar.vue";
const props = defineProps({ bills: Object });
</script>
