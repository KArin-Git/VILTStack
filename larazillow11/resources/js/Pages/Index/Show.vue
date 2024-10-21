<template>
    <div>
        show
    </div>
    <Link href="/">Index Page</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<script>
// create persistent layout instead of wrapping inside <MainLayout> tag
import MainLayout from '../../Layouts/MainLayout.vue'; // local component registration
export default {
    layout: MainLayout
}
</script>
