<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const count = ref(0);
</script>

<template>
    <div>{{ count }}</div>
    <div>
        <PrimaryButton @click="count++">Add 1</PrimaryButton>
    </div>
</template>