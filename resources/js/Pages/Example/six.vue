<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const items = ref([
    {message: 'foo', isShow: true},
    {message: 'bar', isShow: true},
    {message: 'you', isShow: false}
]);
</script>

<template>
<div class="ml-3 mt-3">
    <div v-for="item in items">
        <li v-if="item.isShow">        
            {{ item.message }}
        </li>
    </div>
</div>
</template>