<script setup>
    import {vMaska} from "maska";
    import TextInput from "@/Components/TextInput.vue";
    import InputError from "@/Components/InputError.vue";
    import PrimaryButton from "@/Components/PrimaryButton.vue";
    import InputLabel from "@/Components/InputLabel.vue";

    const props = defineProps({
        form: {
            required: true
        },
        return: {
            required: true
        }
    });

    const form = props.form;
</script>

<template>
    <form @submit.prevent="props.return()" class="mt-6 space-y-6">
        <div>
            <InputLabel for="name" value="Company name" />

            <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.name"
                autocomplete="name"
            />

            <InputError class="mt-2" :message="form.errors.name" />
        </div>

        <div>
            <InputLabel for="name" value="Invoice Prefix" />

            <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.prefix"
                autocomplete="prefix"
            />

            <InputError class="mt-2" :message="form.errors.prefix" />
        </div>

        <div>
            <InputLabel for="iban" value="Your IBAN number" />

            <TextInput
                id="iban"
                ref="ibanInput"
                v-model="form.iban"
                class="mt-1 block w-full"
                autocomplete="iban"
                placeholder="XX00 XXXX 0000 0000 00"
                v-maska data-maska="@@## @@@@ #### #### ##"
            />

            <InputError :message="form.errors.iban" class="mt-2" />
        </div>

        <div>
            <InputLabel for="kvk" value="KVK-nummer" />

            <TextInput
                id="kvk"
                type="number"
                class="mt-1 block w-full"
                v-model="form.coc_number"
                autocomplete="kvk"
            />

            <InputError class="mt-2" :message="form.errors.coc_number" />
        </div>

        <div>
            <InputLabel for="vat" value="BTW-nummer" />

            <TextInput
                id="vat"
                type="text"
                class="mt-1 block w-full"
                v-model="form.vat_number"
                autocomplete="vat"
            />

            <InputError class="mt-2" :message="form.errors.vat_number" />
        </div>

        <div class="w-2/3 inline-block pr-2">
            <h2 class="text-lg font-medium text-gray-900 mb-1">Adresgegevens</h2>
            <InputLabel for="address" value="Straat en huisnummer" />

            <TextInput
                id="address"
                type="text"
                class="mt-1 block w-full"
                v-model="form.address"
                autocomplete="address"
            />

            <InputError class="mt-2" :message="form.errors.address" />
        </div>
        <div class="w-1/3 inline-block">
            <InputLabel for="zipcode" value="Postcode" />

            <TextInput
                id="zipcode"
                type="text"
                class="mt-1 block w-full"
                v-model="form.zipcode"
                autocomplete="zipcode"
            />

            <InputError class="mt-2" :message="form.errors.zipcode" />
        </div>

        <div class="w-1/2 inline-block pr-2">
            <InputLabel for="city" value="Stad" />

            <TextInput
                id="city"
                type="text"
                class="mt-1 block w-full"
                v-model="form.city"
                autocomplete="city"
            />

            <InputError class="mt-2" :message="form.errors.city" />
        </div>
        <div class="w-1/2 inline-block">
            <InputLabel for="country" value="Land" />

            <TextInput
                id="country"
                type="text"
                class="mt-1 block w-full"
                v-model="form.country"
                autocomplete="country"
            />

            <InputError class="mt-2" :message="form.errors.country" />
        </div>

        <div class="flex items-center gap-4">
            <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

            <Transition
                enter-active-class="transition ease-in-out"
                enter-from-class="opacity-0"
                leave-active-class="transition ease-in-out"
                leave-to-class="opacity-0"
            >
                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
            </Transition>
        </div>
    </form>
</template>
