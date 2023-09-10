<template>
    <a :href="link">
        <div>
            <img :src="photo" alt="Phone" />
            <div>
                <h2>{{ name }}</h2>
            </div>
        </div>
    </a>
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
        link: {
            type: String,
            required: true,
        }
    },
};
</script>

<style scoped>

</style>
