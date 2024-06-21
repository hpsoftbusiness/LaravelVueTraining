<!-- ExampleForm.vue -->
<template>
    <div class="container">
            <div v-if="editt">
                <h1>Edit post</h1>
                <form @submit.prevent="save">
                    <div class="form-group">
                        <label for="name">Id:</label>
                        <input type="text" id="id" v-model="formData.id" disabled class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" id="title" v-model="formData.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Body:</label>
                        <input type="text" id="body" v-model="formData.body" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <div v-else>
                <h1>Add post</h1>
                <form @submit.prevent="add">
                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" id="title" v-model="formData.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Body:</label>
                        <input type="text" id="body" v-model="formData.body" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <a href="/" class="btn btn-success" style="float: right;">Powrot</a>
    </div>
</template>
<script>
export default {
    props: ['editt'],
    data() {
        return {
            formData: {
                id: '',
                title: '',
                body: '',
                 post: this.editt
            },
        };
    },
    mounted() {
        this.formData.title = this.editt.title,
        this.formData.body = this.editt.body,
        this.formData.id = this.editt.id
    },
    methods: {
        add() {
            axios.post('/posts', this.formData)
                .then(response => {
                    console.log('Form submitted successfully:', response.data);
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                });
        },
        save() {
            axios.post('/posts/save', this.formData)
                .then(response => {
                    console.log('Form submitted successfully:', response.data);
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                });
        }
    }
};
</script>
