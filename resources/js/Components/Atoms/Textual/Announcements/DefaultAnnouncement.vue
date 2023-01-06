<script setup>
</script>

<template>
    <div class="mb-8 flex justify-center">
        <div class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm leading-6 ring-1 ring-slate-900/10 hover:ring-slate-900/20">
            <span class="text-gray-600">
                <slot></slot>
                <a href="#" class="font-semibold text-sky-600">
                    <span class="absolute inset-0" aria-hidden="true" />
                    Read more <span aria-hidden="true">&rarr;</span>
                </a>
            </span>
        </div>
    </div>
</template>
