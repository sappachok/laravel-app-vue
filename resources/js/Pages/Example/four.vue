<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const message = ref("")
const checkedNames = ref([])

</script>

<template>
    <p>Message is: {{ message }}</p>
    <input v-model="message" placeholder="edit me" />
    <br/><br/><br/>

    <div class="ml-3">
    <span>Multiline message is:</span>
    <p style="white-space: pre-line;">{{ message }}</p>
    <textarea v-model="message" placeholder="add multiple lines"></textarea>
    <br/><br/><br/>
    </div>

    <div class="ml-3">
    <div>Checked names: {{ checkedNames }}</div>

    <input type="checkbox" name="check" value="Jack" v-model="checkedNames">
    <label for="jack">Jack</label>

    <input type="checkbox" name="check" value="John" v-model="checkedNames">
    <label for="john">John</label>

    <input type="checkbox" name="check" value="Mike" v-model="checkedNames">
    <label for="mike">Mike</label>
    </div>

</template>