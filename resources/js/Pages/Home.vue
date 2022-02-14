<template>
    <h1>Home</h1>
    <h2>Hello, {{ name }} </h2>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/settings">Settings</a></li>
        </ul>
    </nav>

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
