<template>
    <div class="bg-gray-100 p-3 rounded-lg w-96 text-sm">
        <Link
            href="/bills/upcoming"
            class="flex items-center px-5 py-2 text-violet-500 w-full rounded-lg"
            :class="{
                'bg-violet-500 text-white shadow-lg':
                    $page.url === '/bills/upcoming',
            }"
        >
            <i class="fa-solid fa-house mr-3"></i>Summary
        </Link>
        <Link
            href="/bills"
            class="flex items-center px-5 py-2 text-violet-500 w-full rounded-lg"
            :class="{
                'bg-violet-500 text-white shadow-lg': $page.url === '/bills',
            }"
        >
            <i class="fa-solid fa-list mr-3"></i>All
        </Link>
        <Link
            href="/bills/create"
            class="flex items-center px-5 py-2 text-violet-500 w-full rounded-lg"
            :class="{
                'bg-violet-500 text-white shadow-lg':
                    $page.url === '/bills/create',
            }"
        >
            <i class="fa-solid fa-plus mr-3"></i>Add a bill
        </Link>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
