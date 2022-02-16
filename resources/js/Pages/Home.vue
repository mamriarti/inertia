<template>
    <h1>Home</h1>
    <h2>Hello, {{ name }} </h2>


   <Nav />
    <p>In this series, we will use the following frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
    import Nav from "../Shared/Nav";
    export default {
        components: { Nav },
        props: {
            name: String,
            frameworks: Array,
        },
    };


</script>
