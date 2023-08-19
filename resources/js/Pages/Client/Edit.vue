<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import LinkButton from "@/Components/LinkButton.vue";
import {Head, useForm} from "@inertiajs/vue3";
import CreateEditForm from "@/Pages/Client/Partials/CreateEditForm.vue";

const props = defineProps({
    client: {}
})

const form = useForm({
    name: props.client.name,
    iban: props.client.iban,
    address: props.client.address,
    zipcode: props.client.zipcode,
    city: props.client.city,
    country: props.client.country,
    vat_number: props.client.vat_number,
    coc_number: props.client.coc_number,
});

const save = () => {
    form.patch(route('clients.update', {clientId: props.client.id}), {
        preserveScroll: true,
    });
}
</script>
<template>
    <Head title="Edit client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit client {{ client.name }}</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Edit the client
                    </p>
                </div>
                <LinkButton :href="route('clients.index')">Go back</LinkButton>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <CreateEditForm :form="form" :return="save"/>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
