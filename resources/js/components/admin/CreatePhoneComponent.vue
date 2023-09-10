<template>
    <div>
        <form method="POST" :action="action">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    class="form-control"
                    required
                />
                <label for="price">Precio:</label>
                <input
                    id="price"
                    type="text"
                    name="price"
                    class="form-control"
                    required
                />
                <label for="photoUrl">Url de la imagen:</label>
                <input
                    id="photoUrl"
                    type="text"
                    name="photoUrl"
                    class="form-control"
                    required
                />
                <label for="description">Descripción:</label>
                <input
                    id="description"
                    type="text"
                    name="description"
                    class="form-control"
                    required
                />
                <input type="hidden" name="_token" :value="csrf">
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        action: {
            type: String,
            required: true,
        },
        csrf: {
            type: String,
            required: true,
        },
    },
};
</script>

<style scoped>

</style>
