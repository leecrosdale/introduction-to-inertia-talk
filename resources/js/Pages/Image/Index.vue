<template>
    <layout title="All images">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Images for {{ $page.app.name }}</div>

                        <div class="card-body">
                            <img v-for="image in images" :src="image.image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>

    import Layout from '../../Shared/Layout';

    export default {
        components: {
            Layout
        },
        props: [
            'images'
        ]
    }
</script>
