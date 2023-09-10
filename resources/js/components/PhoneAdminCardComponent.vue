<template>
    <div>
        <img :src="photo" alt="Phone" />
        <div>
            <h2>{{ name }}</h2>
            <p>{{ price }}</p>
            <p>{{ description }}</p>
            <a :href="delete_link">Borrar</a>
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

</style>

