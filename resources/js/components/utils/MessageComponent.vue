<template>
    <div v-if="showDialog" class="popup-dialog">
        <div class="popup-content">
            <button class="close-button" @click="closeDialog">X</button>
            <p>{{ message }}</p>
            <button @click="closeDialog">Cerrar</button>
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
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        position: relative;
    }

    button {
        margin-top: 10px;
        cursor: pointer;
    }

    .close-button {
        position: absolute;
        top: 5px;
        right: 10px;
        background: none;
        border: none;
        font-size: 14px;
        cursor: pointer;
        padding: 0;
        outline: none;
    }

    .close-button:hover {
        color: red;
    }
</style>
