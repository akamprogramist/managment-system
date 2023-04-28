<template>
    <Card>
        <div class="flex justify-between px-5 py-3 border-b">
            <p>Bills</p>
        </div>
        <div class="flex p-5 items-start gap-5">
            <div class="bg-gray-300 p-3 rounded-lg w-96 text-sm">
                <button
                    class="flex items-center shadow-lg px-5 py-2 bg-blue-500 text-white w-full rounded-lg"
                >
                    <i class="fa-solid fa-house mr-3"></i>Summary
                </button>
                <button
                    class="flex items-center px-5 py-2 text-white w-full rounded-lg"
                >
                    <i class="fa-solid fa-list mr-3"></i>Summary
                </button>
                <Link
                    href="/bills/create"
                    class="flex items-center px-5 py-2 text-white w-full rounded-lg"
                >
                    <i class="fa-solid fa-plus mr-3"></i>Add a bill
                </Link>
            </div>
            <div class="w-full">
                <p class="mb-3 font-semibold text-lg">Upcoming Bills</p>
                <div class="grid grid-cols-2 gap-3">
                    <div class="flex justify-between p-3 rounded-lg border">
                        <div class="space-y-3">
                            <p class="text-sm">25/3/2020</p>
                            <p
                                class="text-lg font-semibold text-blue-950 capitalize"
                            >
                                office rent
                            </p>
                            <p class="text-2xl font-semibold text-blue-950">
                                $1,250.00
                            </p>
                            <div>
                                <p class="text-sm text-red-600">Due</p>
                                <p class="text-xs text-gray-400">monthly</p>
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
    </Card>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
import Card from "../components/Card.vue";
</script>
