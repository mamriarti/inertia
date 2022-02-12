<template>
    <h1>Home</h1>
    <h2>Hello, {{ name }} </h2>

    <p>In this series, we will use the following frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
    export default {
        props: {
            name: String,
            frameworks: Array,
        },
    };
</script>
