<template>
    <div class="">
        <div class=" justify-content-center">
            <p><b>Example Component</b></p>
            <p>I'm an example component.</p>
        </div>
    </div>
</template>

<script>
// importar librerias a VUE
  import toastr from 'toastr'

    export default {
        mounted() {
           toastr.error('esto es ?');
            console.log('Component mounted.')
        }
    }
</script>
