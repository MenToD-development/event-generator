<template>
    <div class="bg-white font-serif">
        <div class="mx-auto max-w-7xl py-16 px-6 sm:py-24 lg:px-8">
            <div class="pb-16 xl:flex xl:items-center xl:justify-between">
                <div>
                    <h1 class="text-4xl font-bold font-serif tracking-tight sm:text-5xl">
                        <span class="text-slate-900">Één vereniging pakket voor maar </span>
                        <span class="text-blue-600">€ 0,-</span>
                    </h1>
                    <p class="mt-5 text-xl text-slate-500">Alles is inbegrepen om als vereniging aan de slag te gaan met het organiseren van competities.</p>
                </div>
                <a href="#">
                    <ui-button fill="primary" size="2xl">
                        Start vandaag nog
                    </ui-button>
                </a>
            </div>
            <div class="border-t border-gray-200 pt-16 xl:grid xl:grid-cols-3 xl:gap-x-8">
                <div>
                    <h2 class="text-lg text-blue-600">Alles wat je nodig hebt</h2>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900">In één applicatie</p>
                    <p class="mt-4 text-lg text-slate-500">
                        Van het opzetten tot uitnodigen, beheren, inzicht geven
                        en het regelen van de wedstrijden. Alles met één applicatie.
                    </p>
                </div>
                <div class="mt-4 sm:mt-8 md:mt-10 md:grid md:grid-cols-2 md:gap-x-8 xl:col-span-2 xl:mt-0">
                    <ul role="list" class="divide-y divide-gray-200">
                        <template v-for="(feature, featureIdx) in features.slice(0, 5)" :key="feature">
                            <li v-if="featureIdx === 0" class="flex py-4 md:py-0 md:pb-4">
                                <CheckIcon class="h-6 w-6 flex-shrink-0 text-green-500" aria-hidden="true" />
                                <span class="ml-3 text-base text-gray-500">{{ feature }}</span>
                            </li>
                            <li v-else class="flex py-4">
                                <CheckIcon class="h-6 w-6 flex-shrink-0 text-green-500" aria-hidden="true" />
                                <span class="ml-3 text-base text-gray-500">{{ feature }}</span>
                            </li>
                        </template>
                    </ul>
                    <ul role="list" class="divide-y divide-gray-200 border-t border-gray-200 md:border-t-0">
                        <template v-for="(feature, featureIdx) in features.slice(5)" :key="feature">
                            <li v-if="featureIdx === 0" class="flex py-4 md:border-t-0 md:py-0 md:pb-4">
                                <CheckIcon class="h-6 w-6 flex-shrink-0 text-green-500" aria-hidden="true" />
                                <span class="ml-3 text-base text-gray-500">{{ feature }}</span>
                            </li>
                            <li v-else class="flex py-4">
                                <CheckIcon class="h-6 w-6 flex-shrink-0 text-green-500" aria-hidden="true" />
                                <span class="ml-3 text-base text-gray-500">{{ feature }}</span>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { CheckIcon } from '@heroicons/vue/24/outline'
import UiButton from "../Atoms/Buttons/UiButton.vue";

const features = [
    'Registreren van één vereniging.',
    'Aanmaken van competities.',
    'Versturen van uitnodigingen.',
    'Bijhouden van deelnemer registratie.',
    'Beheren van de competitie.',
    'Tonen van het overzichtspaneel.',
    'Gebruik van spelerspaneel.',
    'Invullen van resultaten.',
    'Resultaat overzicht genereren.',
]
</script>
