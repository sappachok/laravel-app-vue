<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const activeColor = ref("red");
</script>

<template>
    <div class="mt-3 ml-3">
    <div :style="{ color: activeColor }">My Message</div>

    <input type="radio" name="check" value="red" v-model="activeColor">
    <label for="jack">Red</label>

    <input type="radio" name="check" value="green" v-model="activeColor">
    <label for="john">Green</label>

    <input type="radio" name="check" value="blue" v-model="activeColor">
    <label for="mike">Blue</label>

    </div>
</template>