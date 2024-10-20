<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <!-- default keyword flag -->
    <slot>Default</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>