<template>
    <div>Index</div>
    <Link href="/hello">Show Page</Link>
    <div>
        The message is: {{ message }}
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

// Props are One-Way data flow === readonly
defineProps({
    message: String // good practice to define the type
})
</script>