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
                    <Link :href="`/customer/${customers.id}`"> summary </Link>
                </div>
                <div
                    class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                >
                    <i class="fa-solid fa-house"></i>
                    <Link :href="`/customer/${customers.id}/edit`"> Edit </Link>
                </div>
            </div>
        </div>

        <div class="w-full">
            <p class="mt-16 w-64 mb-5 text-2xl capitalize">akam kamal</p>
            <Card class="mx-0 mt-0 px-5 py-5 space-y-1">
                <div>
                    <form @submit.prevent="submit">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-6">
                            <div class="grid grid-cols-4">
                                <label
                                    for="fullname"
                                    class="font-semibold capitalize"
                                    >full name
                                </label>
                                <input
                                    v-model="form.fullname"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="fullname"
                                    id="fullname"
                                />
                                <div
                                    v-if="form.errors.fullname"
                                    class="text-red-500"
                                >
                                    {{ form.errors.fullname }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="email"
                                    class="font-semibold capitalize"
                                    >email
                                </label>
                                <input
                                    v-model="form.email"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="email"
                                    id="email"
                                />
                                <div
                                    v-if="form.errors.email"
                                    class="text-red-500"
                                >
                                    {{ form.errors.email }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="Code"
                                    class="font-semibold capitalize"
                                    >Code
                                </label>
                                <input
                                    v-model="form.code"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="Code"
                                    id="Code"
                                />
                                <div
                                    v-if="form.errors.code"
                                    class="text-red-500"
                                >
                                    {{ form.errors.code }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="secondaryemail"
                                    class="font-semibold capitalize"
                                    >secondary email
                                </label>
                                <input
                                    v-model="form.secondaryemail"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="secondaryemail"
                                    id="secondaryemail"
                                />
                                <div
                                    v-if="form.errors.secondaryemail"
                                    class="text-red-500"
                                >
                                    {{ form.errors.secondaryemail }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="displayname"
                                    class="font-semibold capitalize"
                                    >display name
                                </label>
                                <input
                                    v-model="form.displayname"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="displayname"
                                    id="displayname"
                                />
                                <div
                                    v-if="form.errors.displayname"
                                    class="text-red-500"
                                >
                                    {{ form.errors.displayname }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="phone"
                                    class="font-semibold capitalize"
                                    >phone
                                </label>
                                <input
                                    v-model="form.phone"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="phone"
                                    id="phone"
                                />
                                <div
                                    v-if="form.errors.phone"
                                    class="text-red-500"
                                >
                                    {{ form.errors.phone }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="company"
                                    class="font-semibold capitalize"
                                    >company
                                </label>
                                <select
                                    v-model="form.company"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="company"
                                    id="company"
                                >
                                    <option value="none">None</option>
                                </select>
                                <div
                                    v-if="form.errors.company"
                                    class="text-red-500"
                                >
                                    {{ form.errors.company }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
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
                            <div class="grid grid-cols-4">
                                <label
                                    for="businessnumber"
                                    class="font-semibold capitalize"
                                    >business number
                                </label>
                                <input
                                    v-model="form.businessnumber"
                                    type="text"
                                    class="border self-start shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="businessnumber"
                                    id="businessnumber"
                                />
                                <div
                                    v-if="form.errors.businessnumber"
                                    class="text-red-500"
                                >
                                    {{ form.errors.businessnumber }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4 items-start">
                                <label
                                    for="group"
                                    class="font-semibold capitalize"
                                    >group
                                </label>

                                <select
                                    v-model="form.group"
                                    class="border shadow-sm col-span-3 justify-self-strech rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="company"
                                    id="company"
                                >
                                    <option value="None">None</option>
                                    <option value="default">Default</option>
                                </select>
                                <div
                                    v-if="form.errors.company"
                                    class="text-red-500"
                                >
                                    {{ form.errors.company }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="type"
                                    class="font-semibold capitalize"
                                    >type
                                </label>
                                <div class="block">
                                    <div>
                                        <input
                                            v-model="form.type"
                                            type="checkbox"
                                            class="mx-2"
                                            name="supplier"
                                            id="supplier"
                                        />

                                        <label
                                            for="supplier"
                                            class="font-meduim"
                                            >Supplier</label
                                        >
                                    </div>
                                    <div>
                                        <input
                                            v-model="form.type"
                                            type="checkbox"
                                            class="mx-2"
                                            name="customer"
                                            id="customer"
                                        />
                                        <label for="customer">Customer</label>
                                        <div
                                            v-if="form.errors.type"
                                            class="text-red-500"
                                        >
                                            {{ form.errors.type }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="owner"
                                    class="font-semibold capitalize"
                                    >owner
                                </label>
                                <select
                                    v-model="form.owner"
                                    class="border shadow-sm col-span-3 justify-self-strech rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="owner"
                                    id="owner"
                                >
                                    <option value="None">None</option>
                                    <option value="default">Default</option>
                                </select>
                                <div
                                    v-if="form.errors.owner"
                                    class="text-red-500"
                                >
                                    {{ form.errors.owner }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="address"
                                    class="font-semibold capitalize"
                                    >address
                                </label>
                                <input
                                    v-model="form.address"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="address"
                                    id="address"
                                />
                                <div
                                    v-if="form.errors.address"
                                    class="text-red-500"
                                >
                                    {{ form.errors.address }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="city"
                                    class="font-semibold capitalize"
                                    >city
                                </label>
                                <input
                                    v-model="form.city"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="city"
                                    id="city"
                                />
                                <div
                                    v-if="form.errors.city"
                                    class="text-red-500"
                                >
                                    {{ form.errors.city }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="state"
                                    class="font-semibold capitalize"
                                    >state/Region
                                </label>
                                <input
                                    v-model="form.state"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="state"
                                    id="state"
                                />
                                <div
                                    v-if="form.errors.state"
                                    class="text-red-500"
                                >
                                    {{ form.errors.state }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="zip"
                                    class="font-semibold capitalize"
                                    >zip/Postal code
                                </label>
                                <input
                                    v-model="form.zip"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="zip"
                                    id="zip"
                                />
                                <div
                                    v-if="form.errors.zip"
                                    class="text-red-500"
                                >
                                    {{ form.errors.zip }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="country"
                                    class="font-semibold capitalize"
                                    >country
                                </label>
                                <input
                                    v-model="form.country"
                                    type="text"
                                    class="border shadow-sm col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="country"
                                    id="country"
                                />
                                <div
                                    v-if="form.errors.country"
                                    class="text-red-500"
                                >
                                    {{ form.errors.country }}
                                </div>
                            </div>
                            <div class="grid grid-cols-4">
                                <label
                                    for="image"
                                    class="font-semibold capitalize"
                                    >image
                                </label>
                                <input
                                    @input="form.image = $event.target.files[0]"
                                    type="file"
                                    class="col-span-3 rounded-md pr-28 py-2.5 px-4 focus:border-blue-600 focus:outline-none"
                                    name="image"
                                    id="image"
                                />
                            </div>
                        </div>
                        <button
                            class="px-4 py-2 m-8 shadow-md bg-blue-500 hover:bg-violet-500 duration-300 text-white rounded-md"
                            type="submit"
                        >
                            Update Customer
                        </button>
                    </form>
                </div>
            </Card>
        </div>
    </div>
</template>

<script setup>
import Card from "../components/Card.vue";
import { Link, useForm } from "@inertiajs/vue3";
const props = defineProps({ customers: Object });
const form = useForm({
    fullname: props.customers.fullname,
    email: props.customers.email,
    code: props.customers.code,
    secondaryemail: props.customers.secondaryemail,
    displayname: props.customers.displayname,
    phone: props.customers.phone,
    company: props.customers.company,
    currency: props.customers.currency,
    businessnumber: props.customers.businessnumber,
    group: props.customers.group,
    type: props.customers.type,
    owner: props.customers.owner,
    address: props.customers.address,
    city: props.customers.city,
    state: props.customers.state,
    zip: props.customers.zip,
    country: props.customers.country,
});
function submit() {
    form.post(`/customer/${props.customers.id}`, {
        onSuccess: () => form.reset(),
    });
}
</script>
