<template>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light mb-5">
        <a class="navbar-brand" :href="admin_url">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a :class="(active === 'admin')? 'nav-link active' : 'nav-link'" :href="admin_url">Inicio</a>
                </li>
                <li class="nav-item">
                    <a :class="(active === 'createPhone')? 'nav-link active' : 'nav-link'" :href="new_phone_url">Crear Teléfono</a>
                </li>
                <li class="nav-item">
                    <a :class="(active === 'purchases')? 'nav-link active' : 'nav-link'" :href="purchases_url">Compras</a>
                </li>
            </ul>
            <a class="nav-link" :href="base_url"><button class="btn btn-danger"><strong>Salir</strong></button></a>
        </div>
    </nav>
</template>

<script>
export default {
    props: {
        admin_url: {
            type: String,
            required: true,
        },
        base_url: {
            type: String,
            required: true,
        },
        new_phone_url: {
            type: String,
            required: true,
        },
        purchases_url: {
            type: String,
            required: true,
        },
        active: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>
    .active{
        font-weight: bold;
        color: #01386a;
        text-decoration: underline;
    }
</style>
