<template>
    <div>
        <form method="POST" :action="action">
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input
                    id="password"
                    type="password"
                    name="password"
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
