<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg">
                    <input type="text" value="My App">
                </h1>

                <p class="text-sm ml-4">
                    Welcome Back, {{ username }}!
                </p>
            </div>

            <Nav />
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">

            <iframe
                class="mb-6"
                width="100%"
                frameborder="no"
                scrolling="no"
                seamless src="https://player.simplecast.com/dafc434a-9b89-4d3e-b7e4-b7e350cedf5a?dark=false"></iframe>
            <slot />
        </div>
    </section>
</template>

<script>
    import Nav from "./Nav";
    export default {
        components: { Nav },
        computed: {
            username() {
                return this.$page.props.auth.user.username;
            }
        }
    };
</script>
