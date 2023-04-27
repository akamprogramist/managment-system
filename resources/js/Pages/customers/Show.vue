<template>
    <div class="flex">
        <div class="rounded-lg mt-16 w-64">
            <img
                src="../../../../storage/app/public/images/akam.png"
                class="h-36 w-36 mx-auto object-cover rounded-full"
                alt=""
            />
            <div class="text-center my-5 text-gray-700 font-semibold space-y-1">
                <p>akam@gmail.com</p>
                <p>07700656816</p>
            </div>
            <div class="">
                <div
                    class="flex items-center gap-2 text-white w-full rounded-r-full bg-gray-600 capitalize text-left px-8 py-2"
                >
                    <i class="fa-solid fa-house"></i>
                    <Link :href="`/customer/${customer.id}`"> summary </Link>
                </div>
                <div
                    class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                >
                    <i class="fa-solid fa-house"></i>
                    <Link :href="`/customer/${customer.id}/edit`"> Edit </Link>
                </div>
                <div
                    class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                >
                    <i class="fa-solid fa-house"></i>
                    <Link :href="`/customer/${customer.id}/todo`">
                        activity
                    </Link>
                </div>
            </div>
        </div>
        <div class="w-full">
            <p class="mt-16 w-64 mb-3 text-2xl capitalize">akam kamal</p>
            <Card class="px-5 py-5 space-y-1">
                <div class="flex gap-5 justify-between border-b border-dashed">
                    <div>
                        <div class="flex capitalize text-sm">
                            <p class="mr-1 font-semibold">Full Name:</p>
                            <p>{{ customer.fullname }}</p>
                        </div>
                        <div class="flex capitalize text-sm">
                            <p class="mr-1 font-semibold">email:</p>
                            <p>{{ customer.email }}</p>
                        </div>
                        <div class="flex capitalize text-sm">
                            <p class="mr-1 font-semibold">phone:</p>
                            <p>{{ customer.phone }}</p>
                        </div>
                        <div class="flex capitalize text-sm">
                            <p class="mr-1 font-semibold">city:</p>
                            <p>{{ customer.city }}</p>
                        </div>
                    </div>
                    <div>
                        <label for="notes"></label>
                        <textarea
                            name="notes"
                            class="px-4 py-2 rounded-lg border"
                            id="notes"
                            cols="60"
                            rows="8"
                            placeholder="Contact Notes..."
                        ></textarea>
                    </div>
                </div>
                <div class="py-3 border-b border-dashed">
                    <Link
                        class="px-4 py-2 bg-yellow-400 text-white rounded-lg text-sm"
                        :href="`/customer/${customer.id}/edit`"
                    >
                        Edit
                    </Link>
                </div>
                <div class="py-3 border-b border-dashed">
                    <p class="font-semibold mb-2 text-xl">Balance : $ 0.00</p>
                    <div class="flex gap-2">
                        <button
                            class="px-4 py-2 shadow-lg bg-blue-500 text-white rounded-lg text-sm hover:opacity-80"
                        >
                            Add Fund
                        </button>
                        <button
                            class="px-4 py-2 shadow-lg bg-red-500 text-white rounded-lg text-sm hover:opacity-80"
                        >
                            Return Fund
                        </button>
                    </div>
                </div>

                <div class="py-5 font-semibold text-gray-700">
                    <div class="flex justify-between p-2 bg-gray-50">
                        <p>Account Summary</p>
                    </div>
                    <div class="flex pr-40 justify-between p-2 bg-gray-100">
                        <p>Total Income</p>
                        <p class="text-green-600">$ 300</p>
                    </div>
                    <div class="flex pr-40 justify-between p-2 bg-gray-50">
                        <p>Total Expence</p>
                        <p class="text-red-600">$ 300</p>
                    </div>
                    <div class="flex pr-52 my-5 justify-between p-2 bg-gray-50">
                        <p>Profit</p>
                        <p class="text-violet-600">$ 300</p>
                    </div>
                </div>
            </Card>
        </div>
    </div>
</template>
<script setup>
import Card from "../components/Card.vue";
import { Link } from "@inertiajs/vue3";
const props = defineProps({ customer: Object });
</script>
