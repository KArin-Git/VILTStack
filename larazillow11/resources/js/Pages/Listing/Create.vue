<template>
    <form @submit.prevent="create">
        <div>
            <div>
                <label>Beds</label>
                <input type="text" v-model.number="form.beds" />
                <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
            </div>

            <div>
                <label>Baths</label>
                <input type="text" v-model.number="form.baths" />
                <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
            </div>

            <div>
                <label>Area</label>
                <input type="text" v-model.number="form.area" />
                <div v-if="form.errors.area">{{ form.errors.area }}</div>
            </div>

            <div>
                <label>City</label>
                <input type="text" v-model="form.city" />
                <div v-if="form.errors.city">{{ form.errors.city }}</div>
            </div>

            <div>
                <label>Post Code</label>
                <input type="text" v-model="form.code" />
                <div v-if="form.errors.code">{{ form.errors.code }}</div>
            </div>

            <div>
                <label>Street</label>
                <input type="text" v-model="form.street" />
                <div v-if="form.errors.street">{{ form.errors.street }}</div>
            </div>

            <div>
                <label>Street Nr</label>
                <input type="text" v-model="form.street_nr" />
                <div v-if="form.errors.street_nr">{{ form.errors.street_nr }}</div>
            </div>

            <div>
                <label>Price</label>
                <input type="text" v-model.number="form.price" />
                <div v-if="form.errors.price">{{ form.errors.price }}</div>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
// hold the data from the form
// ref for primitive types ie string, number, boolean
// reactive for objects
const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0,
})

const create = () => form.post(route('listing.store'))
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px
}
</style>