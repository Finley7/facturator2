<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from '@inertiajs/vue3';
import LinkButton from "@/Components/LinkButton.vue";

defineProps({clients: Array})
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clients</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Create or edit your clients here
                    </p>
                </div>
                <LinkButton :href="route('clients.create')" type="success">Add new client</LinkButton>
            </div>
        </template>

        <div class="p-11">
            <div v-for="client in clients" class="inline-block px-1 w-1/3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-6 pt-6 text-gray-900 flex justify-between items-center">
                        <h1 class="text-xl font-bold">{{client.name}}</h1>
                        <div class="flex space-x-2">
                            <LinkButton size="sm" :href="route('clients.edit', client.id)" color="blue">
                                Edit
                            </LinkButton>
<!--                            <LinkButton size="sm" :href="route('post-company.users.index', company.id)" color="red">-->
<!--                                Verwijderen-->
<!--                            </LinkButton>-->
                        </div>
                    </div>
                    <div class="px-6 pt-2 pb-4 text-gray-900">
                        blabla
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
