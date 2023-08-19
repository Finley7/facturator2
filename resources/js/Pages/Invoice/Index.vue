<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import LinkButton from "@/Components/LinkButton.vue";
import {Head} from "@inertiajs/vue3";

const props = defineProps({
    invoices: {}
})
</script>
<template>
    <Head title="Invoices"/>
    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Invoices</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Create or edit your invoices here
                    </p>
                </div>
                <LinkButton :href="route('invoices.create')" type="success">Add new invoice</LinkButton>
            </div>
        </template>
    </AuthenticatedLayout>
</template>
