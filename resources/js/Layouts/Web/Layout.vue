<script setup>
import Header from "./../../Components/Web/Header.vue";
import Footer from "./../../Components/Web/Footer.vue";
</script>

<template>
    <div class="isolate bg-white">
        <Header></Header>
        <main>
            <slot></slot>
        </main>
        <Footer></Footer>
    </div>
</template>
