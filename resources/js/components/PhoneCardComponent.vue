<template>
    <div class="phone-card">
        <img :src="photo" alt="Phone" class="phone-image" />
        <div class="phone-details">
            <h2 class="phone-name">{{ name }}</h2>
            <p class="phone-price">{{ price }}</p>
            <p class="phone-description">{{ description }}</p>
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
    },
};
</script>

<style scoped>
/* Styles for PhoneCardComponent */
.phone-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 250px;
}

.phone-image {
    max-width: 100px;
    max-height: 100px;
    margin-bottom: 10px;
}

.phone-name {
    font-size: 1.25rem;
    margin: 0;
}

.phone-price {
    font-weight: bold;
    margin: 0;
    margin-top: 8px;
}

.phone-description {
    margin: 0;
    margin-top: 8px;
    text-align: center;
}
</style>
