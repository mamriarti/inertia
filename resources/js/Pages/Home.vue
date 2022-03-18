<template>
    <Layout>
        <h1 class="text-3xl">
            Home
        </h1>
    </Layout>
    <p>In this series, we will use the following frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>

<script setup>
    import Layout from "../Shared/Layout";
   


</script>
