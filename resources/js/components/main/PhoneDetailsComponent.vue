<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <img :src="photo" alt="Phone" />
            </div>
            <div class="col-8">
                <h1>{{ name }}</h1>
                <p>{{ price }} €</p>
                <p>{{ description }}</p>
                <a :href="purchase_link"><button class="btn btn-primary"><strong>Comprar</strong></button></a>
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
        purchase_link: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>
    img{
        width: 100%;
        height: 80vh;
        object-fit: cover;
    }

    h1, p{
        color: white;
    }
</style>

