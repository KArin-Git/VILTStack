<template>
    Hello {{ message }}
    Count: {{ counter }}
</template>

<script setup>
import { ref } from 'vue';
const message = ref('Hello Vue 3');
const counter = ref(0);
setInterval(() => counter.value++, 1000);
</script>