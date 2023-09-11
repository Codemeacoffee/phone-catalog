<template>
    <div>
        <h2>{{ name }}</h2>
        <img :src="photo" alt="Purchase Photo" />
        <p><strong>Price:</strong> {{ price }} €</p>
        <p><strong>Description:</strong> {{ description }}</p>
        <p><strong>Username:</strong> {{ username }}</p>
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

</style>
