<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from './../../Layouts/Web/Layout.vue';
import Hero from "./../../Components/Web/Hero.vue";
import FeatureSection from "./../../Components/Web/FeatureSection.vue";
import PricingSection from "./../../Components/Web/PricingSection.vue";
import TestimonialSection from "./../../Components/Web/TestimonialSection.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome"></Head>

    <layout>
        <Hero />

        <FeatureSection />

        <PricingSection />

        <TestimonialSection />
    </layout>
</template>
