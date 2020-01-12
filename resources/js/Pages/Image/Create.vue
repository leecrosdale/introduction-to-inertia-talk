<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Image record</div>

                    <div class="card-body">

                        <form @submit.prevent="submit">
                            <label for="title">Title:</label>
                            <input id="title" v-model="form.title" />
                            <div v-if="$page.errors.title">{{ $page.errors.title[0] }}</div>

                            <label for="url">Image URL:</label>
                            <input id="url" v-model="form.image" />
                            <button type="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    title: null,
                    image: null
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.$route('image.store'), this.form);
            }
        }

    }
</script>
