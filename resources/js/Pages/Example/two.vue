<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const message = ref('Hello Vue!');
</script>

<template>
    <div>{{ message }}</div>
</template>