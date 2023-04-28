<template>
    <div class="rounded-lg mt-16 w-64">
        <img
            :src="`${
                customers.image
                    ? `/storage/${customers.image}`
                    : `/storage/images/no-image.jpg`
            } `"
            src="../../../../storage/app/public/images/no-image.jpg"
            class="h-36 w-36 mx-auto object-cover rounded-full"
            alt=""
        />
        <div class="text-center my-5 text-gray-700 font-semibold space-y-1">
            <p>{{ customers.email }}</p>
            <p>{{ customers.phone }}</p>
        </div>
        <div>
            <Link
                :href="`/customer/${customers.id}`"
                class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                :class="{
                    'text-white bg-gray-600 shadow-lg':
                        $page.url === `/customer/${customers.id}`,
                }"
            >
                <i class="fa-solid fa-house"></i>
                summary
            </Link>
            <Link
                :href="`/customer/${customers.id}/edit`"
                class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                :class="{
                    'text-white bg-gray-600 shadow-lg':
                        $page.url === `/customer/${customers.id}/edit`,
                }"
            >
                <i class="fa-solid fa-house"></i>
                Edit
            </Link>
            <Link
                :href="`/customer/${customers.id}/todo`"
                class="flex items-center gap-2 w-full rounded-r-full capitalize text-left px-8 py-2"
                :class="{
                    'text-white bg-gray-600 shadow-lg':
                        $page.url === `/customer/${customers.id}/todo`,
                }"
            >
                <i class="fa-solid fa-pen"></i>
                Activity
            </Link>
        </div>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({ customers: Object });
</script>
