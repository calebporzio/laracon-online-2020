<template>
    <div class="flex justify-between items-center w-32 m-auto">
        <button v-on:click="increment">+</button>
        <button v-on:click="decrement">-</button>
        <p>{{ count }}</p>
    </div>
</template>

<script>
    export default {
        data() {
            return { count: 0 }
        },
        methods: {
            increment() {
                this.count++
            },
            decrement() {
                this.count--
            }
        }
    }
</script>
