<template>
    <div class="container">
            <div v-if="edit">
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
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="/" class="btn btn-success" style="float: right;">Powrot</a>
                    </div>
                </form>
            </div>
            <div v-else>
                <h1>Add post</h1>
                <form @submit.prevent="save">
                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" id="title" v-model="formData.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Body:</label>
                        <input type="text" id="body" v-model="formData.body" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add</button>
                        <a href="/" class="btn btn-success" style="float: right;">Back</a>
                    </div>
                </form>
            </div>
    </div>
</template>
<script>
export default {
    props: ['edit'],
    data() {
        return {
            formData: {
                id: '',
                title: '',
                body: ''
            },
        };
    },
    mounted() {
        this.formData.title = this.edit.title,
        this.formData.body = this.edit.body,
        this.formData.id = this.edit.id
    },
    methods: {
        save() {
            axios.post('/post/save', this.formData)
                .then(response => {
                    console.log('Post saved successfully:', response.data);
                })
                .catch(error => {
                    console.error('Error saving post:', error);
                });
        }
    }
};
</script>
