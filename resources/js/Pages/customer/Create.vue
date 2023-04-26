<template>
    <Card>
        <div
            class="flex justify-between items-center px-4 py-1 border-b w-full"
        >
            <p>Add Contact</p>
            <button
                class="bg-blue-500 text-sm shadow px-4 py-2 rounded-lg text-white"
            >
                import Contact
            </button>
        </div>
        <div class="px-4 py-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex">
                    <label for="fullname" class="font-semibold mr-16"
                        >Full Name
                    </label>
                    <input
                        type="text"
                        class="border shadow-sm flex-1 rounded-md py-2 px-4 focus:border-blue-600 focus:outline-none"
                        name="fullname"
                        id="fullname"
                    />
                </div>
                <div class="flex">
                    <label for="fullname" class="font-semibold mr-16"
                        >Full Name
                    </label>
                    <input
                        type="text"
                        class="border shadow-sm flex-1 rounded-md py-2 px-4 focus:border-blue-600 focus:outline-none"
                        name="fullname"
                        id="fullname"
                    />
                </div>
                <div class="flex">
                    <label for="fullname" class="font-semibold mr-16"
                        >Full Name
                    </label>
                    <input
                        type="text"
                        class="border shadow-sm flex-1 rounded-md py-2 px-4 focus:border-blue-600 focus:outline-none"
                        name="fullname"
                        id="fullname"
                    />
                </div>
                <div class="flex">
                    <label for="fullname" class="font-semibold mr-16"
                        >Full Name
                    </label>
                    <input
                        type="text"
                        class="border shadow-sm flex-1 rounded-md py-2 px-4 focus:border-blue-600 focus:outline-none"
                        name="fullname"
                        id="fullname"
                    />
                </div>
            </div>
        </div>
    </Card>
</template>

<script setup>
import Card from "../components/Card.vue";
</script>
