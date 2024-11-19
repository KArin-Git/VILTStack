<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <!-- showing flash message that will be destroyed when a subsequence request -->
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <!-- default keyword flag -->
    <slot>Default</slot>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3'
const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>