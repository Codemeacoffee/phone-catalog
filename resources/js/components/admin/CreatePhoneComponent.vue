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
            </div>
            <div class="form-group">
                <label for="price">Precio:</label>
                <input
                    id="price"
                    type="number"
                    name="price"
                    class="form-control"
                    required
                />
            </div>
            <div class="form-group">
                <label for="photoUrl">Url de la imagen:</label>
                <input
                    id="photoUrl"
                    type="text"
                    name="photoUrl"
                    class="form-control"
                    required
                />
            </div>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <input
                    id="description"
                    type="text"
                    name="description"
                    class="form-control"
                    required
                />
            </div>
            <input type="hidden" name="_token" :value="csrf">
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><strong>Añadir nuevo teléfono</strong></button>
            </div>
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
    label{
        color: white;
        font-weight: bold;
    }
</style>
