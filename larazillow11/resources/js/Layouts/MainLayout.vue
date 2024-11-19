<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <!-- showing flash message that will be destroyed when a subsequence request -->
    <div v-if="page.props.flash.success" class="success">
        {{ page.props.flash.success }}
    </div>
    <!-- default keyword flag -->
    <slot>Default</slot>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
// debugging -page.props.value.flash.success- as page not render
// page
// page.props
// page.props.value >> no data
const page = usePage()
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>