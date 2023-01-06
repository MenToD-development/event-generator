<script setup lang="ts">
import {computed, ComputedRef} from "vue";
import {EnvelopeIcon, GlobeAltIcon, UserCircleIcon, UserGroupIcon} from '@heroicons/vue/20/solid'

type ButtonProps = {
    size: string,
    fill: string,
    leading: string | null,
    trailing: string | null,
};

const icons = {
    'email': EnvelopeIcon,
    'user': UserCircleIcon,
    'management': GlobeAltIcon,
    'group': UserGroupIcon,
};

const props: Readonly<ButtonProps> = withDefaults(defineProps<ButtonProps>(), {
    size: 'sm',
    fill: 'primary',
    leading: null,
    trailing: null,
});

const buttonStyles: ComputedRef = computed(() => ({
    'inline-flex': true,
    'items-center': true,
    'px-2.5': props.size === 'sm',
    'py-1.5': props.size === 'sm',
    'px-3': props.size === 'md',
    'py-2': ['md', 'lg', 'xl'].indexOf(props.size) >= 0,
    'px-4': ['lg', 'xl'].indexOf(props.size) >= 0,
    'px-6': props.size === '2xl',
    'py-3': props.size === '2xl',
    'rounded': props.size === 'sm',
    'rounded-md': props.size !== 'sm',
    'border': true,
    'border-transparent': ['primary', 'secondary'].indexOf(props.fill) >= 0,
    'border-slate-300': props.fill === 'white',
    'bg-blue-600': props.fill === 'primary',
    'bg-blue-100': props.fill === 'secondary',
    'bg-white': props.fill === 'white',
    'shadow-sm': true,
    'font-sans': true,
    'text-sm': props.size === 'sm',
    'text-base': ['md', 'lg'].indexOf(props.size) >= 0,
    'text-lg': ['xl', '2xl'].indexOf(props.size) >= 0,
    'leading-4': props.size === 'md',
    'font-bold': true,
    'text-white': props.fill === 'primary',
    'text-blue-700': props.fill === 'secondary',
    'text-slate-700': props.fill === 'white',
    'hover:bg-blue-700': props.fill === 'primary',
    'hover:bg-blue-200': props.fill === 'secondary',
    'hover:bg-slate-50': props.fill === 'white',
    'focus:outline-none': true,
    'focus:ring-2': true,
    'focus:ring-sky-500': true,
    'focus:ring-offset-2': true,
}));

const iconStyles: ComputedRef = computed(() => ({
    '-ml-0.5': ['sm', 'md'].indexOf(props.size) >= 0 && props.leading,
    '-ml-1': ['lg', 'xl', '2xl'].indexOf(props.size) >= 0 && props.leading,
    'mr-2': ['sm', 'md', 'lg'].indexOf(props.size) >= 0 && props.leading,
    'mr-3': ['xl', '2xl'].indexOf(props.size) >= 0 && props.leading,
    '-mr-0.5': ['sm', 'md'].indexOf(props.size) >= 0 && props.trailing,
    '-mr-1': ['lg', 'xl', '2xl'].indexOf(props.size) >= 0 && props.trailing,
    'ml-2': ['sm', 'md', 'lg'].indexOf(props.size) >= 0 && props.trailing,
    'ml-3': ['xl', '2xl'].indexOf(props.size) >= 0 && props.trailing,
    'h-4': ['sm', 'md'].indexOf(props.size) >= 0,
    'h-5': ['lg', 'xl', '2xl'].indexOf(props.size) >= 0,
    'w-4': ['sm', 'md'].indexOf(props.size) >= 0,
    'w-5': ['lg', 'xl', '2xl'].indexOf(props.size) >= 0,
}));
</script>

<template>
    <button type="button"
            :class="buttonStyles">
        <component v-if="icons[props.leading]" :is="icons[props.leading]"
                   :class="iconStyles" />
        <slot></slot>
        <component v-if="icons[props.trailing]" :is="icons[props.trailing]"
                   :class="iconStyles" />
    </button>
</template>
