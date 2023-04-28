<template>
    <Card>
        <div class="flex justify-between px-5 py-3 border-b">
            <p>Bills</p>
        </div>
        <div class="flex p-5 items-start gap-5">
            <div><BillSidebar /></div>
            <div class="w-full">
                <p class="mb-3 font-semibold text-lg">Upcoming Bills</p>
                <div class="grid grid-cols-2 gap-3">
                    <div v-for="(bill, index) in bills.data" :key="index">
                        <div class="flex justify-between p-3 rounded-lg border">
                            <div class="space-y-3">
                                <p class="text-sm">{{ bill.nextduedate }}</p>
                                <p
                                    class="text-lg font-semibold text-blue-950 capitalize"
                                >
                                    {{ bill.title }}
                                </p>
                                <p class="text-2xl font-semibold text-blue-950">
                                    $ {{ bill.amount }}
                                </p>
                                <div>
                                    <p class="text-sm text-red-600">Due</p>
                                    <p class="text-xs text-gray-400">
                                        {{ bill.repeat }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-1">
                                <button
                                    class="flex p-2 bg-red-500 text-white rounded-lg"
                                >
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                                <button
                                    class="flex p-2 bg-blue-500 text-white rounded-lg"
                                >
                                    <i class="fa-solid fa-edit text-xs"></i>
                                </button>
                                <button
                                    class="flex p-2 bg-green-500 text-white rounded-lg"
                                >
                                    <i class="fa-solid fa-check text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Card>
</template>
<script setup>
import Card from "../components/Card.vue";
import BillSidebar from "../components/BillSidebar.vue";
const props = defineProps({ bills: Object });
</script>
