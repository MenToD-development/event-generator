<template>
    <div class="bg-transparent">
        <div class="mx-auto max-w-7xl py-16 px-6 sm:py-24 lg:px-8">
            <div class="text-center">
                <h2 class="text-lg font-bold text-blue-600">
                    EAVENT
                </h2>
                <p class="mt-1 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                    Één applicatie met drie panelen
                </p>
                <p class="mx-auto mt-5 max-w-xl text-xl text-gray-500">
                    Kort overzicht van wat de verschillen zijn tussen de
                    panelen.
                </p>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden bg-transparent font-serif pt-16 pb-32">
        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                    <div>
                        <div>
                          <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600">
                            <ShieldCheckIcon class="h-8 w-8 text-white" aria-hidden="true"></ShieldCheckIcon>
                          </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold font-serif tracking-tight text-slate-900">
                                Beheer paneel
                            </h2>
                            <p class="mt-4 text-lg text-slate-500">
                                Registreer je account en maak een vereniging aan waarin de
                                evenementen kunnen worden gestart. Je kunt kleuren,
                                afbeeldingen, logo's en gepersonaliseerde teksten wijzigen zodat de
                                applicatie de look and feel van jouw vereniging krijgt.
                            </p>
                            <div class="mt-6">
                                <a href="#">
                                    <ui-button fill="secondary" size="xl">
                                        Lees meer over het beheer paneel
                                    </ui-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="https://via.placeholder.com/948x569"
                            alt="Inbox user interface"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                <div class="mx-auto max-w-xl px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                    <div>
                        <div>
                          <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600">
                            <SparklesIcon class="h-8 w-8 text-white" aria-hidden="true"/>
                          </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-slate-900">
                                Overzichtspaneel
                            </h2>
                            <p class="mt-4 text-lg text-slate-500">
                                Organiseer je eerste evenement waarbij er keuze is uit
                                verschillende soorten competitie vormen per sport branche. Van
                                uitnodigingen tot aan deelnemers registratie en het genereren van
                                de competitie tot aan het verwerken van de uiteindelijke resultaten
                                wordt compleet geregeld via Eavent.
                            </p>
                            <div class="mt-6">
                                <a href="#">
                                    <ui-button size="xl" fill="secondary">
                                        Lees meer over het overzichtspaneel
                                    </ui-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
                    <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="https://via.placeholder.com/927x556"
                            alt="Customer profile user interface"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                    <div>
                        <div>
                          <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600">
                            <UserGroupIcon class="h-8 w-8 text-white" aria-hidden="true"></UserGroupIcon>
                          </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold font-serif tracking-tight text-slate-900">
                                Spelerspaneel
                            </h2>
                            <p class="mt-4 text-lg text-slate-500">
                                De deelnemers wie zich inschrijven bij het evenement krijgen een
                                eigen account binnen de vereniging. Deze spelers kunnen inloggen
                                met deze gegevens en vervolgens zien ze waar, hoe laat en tegen wie
                                ze moeten spelen. Alles wordt zo ook tijdens het evenement
                                bijgehouden en er hoeft niks meer te worden uitgeprint en
                                opgehangen.
                            </p>
                            <div class="mt-6">
                                <a href="#">
                                    <ui-button size="xl" fill="secondary">
                                        Lees meer over het spelerspaneel
                                    </ui-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="https://via.placeholder.com/948x569"
                            alt="Inbox user interface"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {UserGroupIcon, SparklesIcon, ShieldCheckIcon} from '@heroicons/vue/24/outline'
import UiButton from "../Atoms/Buttons/UiButton.vue";
</script>
