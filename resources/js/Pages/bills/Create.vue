<template>
    <Card>
        <div class="flex justify-between px-5 py-3 border-b">
            <p>Bills</p>
        </div>
        <div class="flex p-5 items-start gap-5">
            <div><BillSidebar /></div>
            <form @submit.prevent="submit">
                <div class="w-full space-y-5">
                    <div class="grid grid-cols-1">
                        <label
                            for="title"
                            class="text-sm font-semibold capitalize"
                            >Title
                        </label>
                        <input
                            v-model="form.title"
                            type="text"
                            class="border shadow-sm rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                            name="title"
                            id="title"
                        />
                        <div v-if="form.errors.title" class="text-red-500">
                            {{ form.errors.title }}
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="grid grid-cols-1">
                            <label
                                for="nextduedate"
                                class="text-sm font-semibold capitalize"
                                >Next Due Date
                            </label>
                            <input
                                v-model="form.nextduedate"
                                type="date"
                                class="border shadow-sm rounded-md py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                name="nextduedate"
                                id="nextduedate"
                            />
                            <div
                                v-if="form.errors.nextduedate"
                                class="text-red-500"
                            >
                                {{ form.errors.nextduedate }}
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="repeat" class="font-semibold capitalize"
                                >Repeat
                            </label>
                            <select
                                v-model="form.repeat"
                                class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                name="repeat"
                                id="repeat"
                            >
                                <option value="monthly">Monthly</option>
                                <option value="weekly">Weekly</option>
                            </select>
                            <div v-if="form.errors.repeat" class="text-red-500">
                                {{ form.errors.repeat }}
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <label
                                for="currency"
                                class="font-semibold capitalize"
                                >currency
                            </label>
                            <select
                                v-model="form.currency"
                                class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                name="currency"
                                id="currency"
                            >
                                <option value="usd">USD</option>
                                <option value="iqd">IQD</option>
                            </select>
                            <div
                                v-if="form.errors.currency"
                                class="text-red-500"
                            >
                                {{ form.errors.currency }}
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <label
                                for="amount"
                                class="text-sm font-semibold capitalize"
                                >Amount
                            </label>
                            <input
                                v-model="form.amount"
                                type="text"
                                class="border shadow-sm rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                name="amount"
                                id="amount"
                            />
                            <div v-if="form.errors.amount" class="text-red-500">
                                {{ form.errors.amount }}
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            for="payee"
                            class="text-sm font-semibold capitalize"
                            >Payee
                        </label>
                        <input
                            v-model="form.payee"
                            type="text"
                            class="border shadow-sm rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                            name="payee"
                            id="payee"
                        />
                        <div v-if="form.errors.payee" class="text-red-500">
                            {{ form.errors.payee }}
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="py-2 px-4 shadow-lg text-white rounded-lg bg-blue-600 hover:opacity-80"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </Card>
</template>
<script setup>
import Card from "../components/Card.vue";
import BillSidebar from "../components/BillSidebar.vue";
import { useForm } from "@inertiajs/vue3";
const form = useForm({
    title: null,
    nextduedate: null,
    repeat: null,
    currency: null,
    amount: null,
    payee: null,
});
function submit() {
    form.post("/bills", {
        onSuccess: () => form.reset(),
    });
}
</script>
