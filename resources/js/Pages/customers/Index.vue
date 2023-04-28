<template>
    <Card>
        <div
            class="flex justify-between items-center px-4 py-1 border-b w-full"
        >
            <p>List Customer</p>
            <div>
                <Link
                    href="/customer/create"
                    class="bg-green-500 text-xs shadow px-4 py-2 rounded-l-lg text-white"
                >
                    Add customer
                </Link>
                <button
                    class="bg-yellow-500 text-xs shadow px-4 py-2 rounded-r-lg text-white"
                >
                    import Contact
                </button>
            </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 w-full">
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
            <div class="flex gap-2">
                <button
                    class="bg-green-100 text-green-600 text-xs px-4 py-2 rounded-lg"
                >
                    PDF
                </button>
                <button
                    class="bg-yellow-100 text-yellow-600 text-xs px-4 py-2 rounded-lg"
                >
                    Excel
                </button>
            </div>
        </div>
        <div class="bg-white overflow-x-auto px-4">
            <table class="w-full whitespace">
                <thead>
                    <tr class="text-left font-semibold capitalize bg-violet-50">
                        <td class="text-xs w-20 px-2 py-2">image</td>
                        <td class="text-xs px-2 py-2">name</td>
                        <td class="text-xs px-2 py-2">email</td>
                        <td class="text-xs px-2 py-2">phone</td>
                        <td class="text-xs px-2 py-2">Manage</td>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="(customer, index) in customers.data"
                        :key="index"
                    >
                        <td>
                            <p
                                class="pl-2 pr-2 py-2 bg-gray-100 focus:text-indigo-500"
                            >
                                <img
                                    :src="`${
                                        customer.image
                                            ? `storage/${customer.image}`
                                            : `storage/images/no-image.jpg`
                                    } `"
                                    class="h-10 w-10 object-cover rounded-full"
                                />
                            </p>
                        </td>
                        <td class="align-top py-3">
                            <p
                                class="px-2 font-semibold text-sm hover:opacity-50"
                            >
                                {{ customer.fullname }}
                            </p>
                        </td>
                        <td class="align-top py-3">
                            <p
                                class="px-2 font-semibold text-sm text-violet-500"
                            >
                                {{ customer.email }}
                            </p>
                        </td>
                        <td class="align-top py-3">
                            <p class="px-2 font-semibold text-sm">
                                {{ customer.phone }}
                            </p>
                        </td>
                        <td class="space-x-3">
                            <button
                                @click="destroy(customer.id)"
                                class="bg-gray-200 px-3 py-1.5 rounded-md hover:opacity-70"
                            >
                                <i
                                    class="fa-solid fa-trash text-sm text-gray-600"
                                ></i>
                            </button>
                            <Link
                                :href="`/customer/${customer.id}`"
                                class="bg-gray-200 px-3 py-1.5 rounded-md hover:opacity-70"
                            >
                                <i
                                    class="fa-solid fa-user text-sm text-gray-600"
                                ></i>
                            </Link>
                            <button
                                class="bg-gray-200 px-3 py-1.5 rounded-md hover:opacity-70"
                            >
                                <Link :href="`/customer/${customer.id}/edit`">
                                    <i
                                        class="fa-solid fa-pen text-sm text-gray-600"
                                    ></i>
                                </Link>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Card>
</template>

<script setup>
import { Link, router } from "@inertiajs/vue3";
import Card from "../components/Card.vue";
const props = defineProps({ customers: Object });
function destroy(id) {
    if (confirm("Are you sure you want to delete this customer?")) {
        router.delete(`/customer/${id}`);
    }
}
</script>
