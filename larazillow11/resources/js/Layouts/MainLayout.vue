<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>
    <!-- vue <template> is smart enough to know that this timer is timer.value >> unwrap the original value SEE console.log -->
    <!-- timer will be reset when you navigate to another page -->
    <div>The page with time {{ timer }}</div>
    <!-- default keyword flag -->
    <slot>Default</slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue' // import ref function from vue to create reactive variabless
// declare variable
const timer = ref(0) // timer is Object with value property. ref() wraps any value in "a proxy object" >> this value is reactive when it changes
setInterval(() => timer.value++, 1000) // increment timer every second using setInterval() from JS
console.log(timer)
console.log(timer.value)
</script>