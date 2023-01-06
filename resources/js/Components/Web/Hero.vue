<script setup>
import DefaultGlow from "@/Components/Atoms/Textual/Glows/DefaultGlow.vue";
import UiButton from "@/Components/Atoms/Buttons/UiButton.vue";
</script>

<template>
    <!-- The background -->
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
        <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
            <defs>
                <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#bae6fd" />
                    <stop offset="1" stop-color="#99f6e4" />
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="relative px-6 lg:px-8">
        <div class="mx-auto max-w-3xl pt-24 pb-32 sm:pt-48 sm:pb-40 font-serif">
            <div>
                <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-center sm:text-8xl">
                    Opzetten van toernooien en competities
                    <default-glow>met gemak</default-glow>
                </h1>
                <p class="mt-12 text-xl leading-8 text-slate-800 sm:text-center">
                    Het verzorgt het complete evenement van speler tot administrator en beschikt over
                    verschillende tools om alles goed te laten verlopen.
                </p>
                <div class="mt-8 flex gap-x-4 sm:justify-center">
                    <ui-button size="2xl" leading="user" fill="primary">
                        Aan de slag
                    </ui-button>
                    <ui-button size="2xl" fill="secondary">
                        Lees meer over Eavent
                    </ui-button>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#99f6e4" />
                            <stop offset="1" stop-color="#bae6fd" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</template>
