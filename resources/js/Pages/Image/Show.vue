<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ image.title }} - <inertia-link :href="$route('image.create')">Create New</inertia-link></div>

                    <div class="card-body">
                        Rendering: {{ image.image }}
                        <img :src="image.image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'image'
        ]
    }
</script>
