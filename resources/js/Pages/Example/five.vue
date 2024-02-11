<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";
</script>

<script>
export default {
    data() {
        return {
            message: 'I want go to the moon.',
            isShow: true
        }
    }
}
</script>

<template>
    <p v-if="isShow">Show Hidden Message : {{ message }}</p>    
</template>