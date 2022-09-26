<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Web/Layout.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome"></Head>

    <layout></layout>
</template>
