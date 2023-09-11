<template>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" :href="base_url">Phone Catalog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" :href="base_url">Inicio</a>
                </li>
            </ul>
            <a class="nav-link" :href="admin_url">Admin</a>
        </div>
    </nav>
</template>

<script>
export default {
    props: {
        base_url: {
            type: String,
            required: true,
        },
        admin_url: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>

</style>
