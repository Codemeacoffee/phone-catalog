<template>
    <div v-if="showDialog" class="popup-dialog">
        <div class="popup-content bg-white rounded px-4 pb-3">
            <button type="button" class="close" @click="closeDialog">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="mt-5 mx-5">
                <h6>{{ message }}</h6>
            </div>
            <button type="button" class="btn btn-secondary" @click="closeDialog"><strong>Cerrar</strong></button>
        </div>
    </div>
</template>

<script>
    export default {
        props:{
          message: {
              type: String,
              required: true
          }
        },
        data() {
            return {
                showDialog: true,
            };
        },
        methods: {
            closeDialog() {
                this.showDialog = false;
            },
        },
    };
</script>

<style scoped>
    .popup-dialog {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .popup-content {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    button {
        margin-top: 10px;
        cursor: pointer;
    }
</style>
