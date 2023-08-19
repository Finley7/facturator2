<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: 'primary'
    },
    size: {
        type: String,
        default: ''
    }
});

let classList = "shadow inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 "

switch (props.type) {
    case 'primary':
        classList += "bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 text-indigo-600 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2";
        break;
    case 'success':
        classList += "bg-green-500 hover:bg-green-600 active:bg-green-700 text-green-600 focus:ring-2 focus:ring-green-500 focus:ring-offset-2";
        break;
    case 'danger':
        classList += "bg-red-500 hover:bg-red-600 active:bg-red-700 text-red-600 focus:ring-2 focus:ring-red-500 focus:ring-offset-2";
        break;
    case 'warning':
        classList += "bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 text-yellow-600 focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2";
        break;
}
</script>

<template>
    <Link :class="classList" :href="href">
        <slot/>
    </Link>
</template>
