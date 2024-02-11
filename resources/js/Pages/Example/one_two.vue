<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Modal from "@/Components/Modal.vue";
import DangerButton from "@/Components/DangerButton.vue";

const isShowModal = ref(false);

function showModal() {    
    isShowModal.value = true;
}

function closeModal() {
    isShowModal.value = false;
}
</script>

<template>
    <div class="mt-3 ml-3">
        <p class="mt-3"><PrimaryButton @click="showModal">Show Model</PrimaryButton></p>
        <Modal :show="isShowModal" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-slate-800">Are you sure to delete this item ?</h2>
                <div class="mt-6 flex space-x-4">                    
                    <DangerButton @click="closeModal">Close</DangerButton>
                </div>                
            </div>
        </Modal>
    </div>
</template>