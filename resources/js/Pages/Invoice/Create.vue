<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import LinkButton from "@/Components/LinkButton.vue";

</script>
<template>
    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add new invoice</h2>

                    <p class="mt-1 text-sm text-gray-600">
                        Create a new invoice
                    </p>
                </div>
                <LinkButton :href="route('invoices.index')">Go back</LinkButton>
            </div>
        </template>

        <div class="p-11">
            <div class="lg:flex lg:space-x-1">
                <div class="lg:w-1/2">
                    <div class="bg-white p-5 rounded shadow">
                        Invoice draft
{{ $page.props.auth.user.name }}

                    </div>
                </div>
                <div class="lg:w-1/2">Factuur voorbeeld</div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
