<template>
        <h1 class="text-3xl">
            Home
        </h1>
    <p>In this series, we will use the following frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script>
    import Layout from "../Shared/Layout";
    export default {
        layout: Layout
    }



</script>
