<template>
    <div class="container">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img class="card-img-top" :src="photo" :alt="name" />
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h4 class="card-title mt-4">{{ name }}</h4>
                        <p class="card-text">{{ description }}</p>
                        <p>{{ price }} €</p>
                        <a :href="delete_link" class="btn btn-danger"><strong>Borrar</strong></a>
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
        delete_link: {
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

