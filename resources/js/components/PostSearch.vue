<template>
    <div class="form-group row">
        <div class="col-sm-8">
            <input type="text" v-model="message" class="form-control" placeholder="Search for post" id="usr"
                   name="username">
        </div>
        <div class="col-sm-4">
            <button class="btn btn-primary btn-block" @click="fetchData">Search</button>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="post in response" :key="post.id">
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
            <td>{{ post.body }}</td>
            <td><a :href="'/post/edit/' + post.id" class="btn btn-primary">Edit</a></td>
        </tr>
        </tbody>
    </table>
</template>
<script>
export default {
    data() {
        return {
            message: '',
            response: '',
            resp: '',
            formData: {
                id: '',
                title: '',
                body: ''
            },
        }
    },

    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            axios.post('/post/ajax', {query: this.message})
                .then(response => {
                    this.response = response.data;
                })
        }
    }
}
</script>
