<template>
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img class="card-img-top" :src="photo" :alt="name" />
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <p class="card-title mt-4"><strong>Producto:</strong> {{ name }}</p>
                        <p class="card-text"><strong>Descripción:</strong> {{ description }}</p>
                        <p class="card-text"><strong>Precio:</strong> {{ price }} €</p>
                        <p class="card-text"><strong>Comprador:</strong> {{ username }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true,
        },
        photo: {
            type: String,
            required: true,
        },
        price: {
            type: String,
            required: true,
        },
        description: {
            type: String,
            required: true,
        },
        username: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>
    img{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
</style>
