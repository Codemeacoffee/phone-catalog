<template>
    <div class="centered bg-white rounded px-5 py-4">
        <form method="POST" :action="action">
            <div class="form-group mb-4">
                <label for="password"><strong>Contraseña</strong></label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <input type="hidden" name="_token" :value="csrf">
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><strong>Acceder</strong></button>
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
    .centered{
        margin-left: 50vw;
        margin-top: 50vh;
        transform: translate(-50%, -50%);
    }
</style>
