<script setup>
import Card from "../components/Card.vue";
import { Link, useForm, router } from "@inertiajs/vue3";
const props = defineProps({ customer: Object, todos: Object });
const form = useForm({
    todo: null,
});
function submit(id) {
    form.post(`/todo/${id}`, {
        customer_id: id,
        onSuccess: () => form.reset(),
    });
}
function destroy(id) {
    if (confirm("Are you sure you want to delete this customer?")) {
        router.delete(`/todo/${id}`);
    }
}
</script>

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
                {{ customer.id }}
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
                    <i class="fa-solid fa-pen"></i>
                    <Link :href="`/customer/${customer.id}/todo`">
                        Activity
                    </Link>
                </div>
            </div>
        </div>
        <div class="w-full">
            <p class="mt-16 w-64 mb-3 text-2xl capitalize">akam kamal</p>
            <Card class="p-5">
                <div class="w-full">
                    <form @submit.prevent="submit(customer.id)">
                        <textarea
                            v-model="form.todo"
                            name="notes"
                            class="w-full px-4 py-2 border"
                            id="notes"
                            rows="8"
                            placeholder="Add Activity..."
                        ></textarea>
                        <div v-if="form.errors.todo" class="text-red-500">
                            {{ form.errors.todo }}
                        </div>
                        <button
                            type="submit"
                            class="px-4 py-2 my-5 bg-blue-500 text-white rounded-lg"
                        >
                            Post Activity
                        </button>
                    </form>
                    <div v-for="(todo, index) in todos" :key="index">
                        <div class="flex">
                            <!-- <i class="fa-solid fa-list"></i> -->
                            <div class="space-y-3 text-right w-32">
                                <i
                                    class="fa-solid p-2 border bg-gray-100 fa-check"
                                ></i>
                                <div class="space-y-1 px-2">
                                    <p>
                                        {{ todo.created_at }}
                                    </p>
                                    <p class="text-xs">
                                        {{ todo.created_atago }}
                                    </p>
                                </div>
                            </div>
                            <div
                                class="border p-2 space-y-4 w-full border-r-white border-b-white hover:bg-gray-100"
                            >
                                <p class="font-semibold text-gray-900">
                                    {{ todo.user_id }}
                                </p>
                                <p class="text-gray-700 text-sm">
                                    {{ todo.todo }}
                                </p>
                                <div class="flex gap-1 text-xs capitalize">
                                    <button
                                        class="bg-blue-500 text-white px-3 rounded py-1"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        @click="destroy(todo.id)"
                                        class="bg-red-500 text-white px-3 rounded py-1"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </Card>
        </div>
    </div>
</template>
