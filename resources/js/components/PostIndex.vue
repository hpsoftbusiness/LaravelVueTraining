<template>
    <div class="container">
        <h1>Latest blog posts</h1>
        <br>
        <post-search></post-search>
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
            <tr v-for="post in posts">
                <td>{{post.id}}</td>
                <td>{{post.title}}</td>
                <td>{{post.body}}</td>
                <td><a :href="'/posts/edit/' + post.id" class="btn btn-primary">Edit</a></td>
            </tr>
            </tbody>
        </table>
        <a href="/posts/create"><button class="btn btn-primary" >Add new post</button></a>
    </div>
</template>

<script>
import PostSearch from "./PostSearch.vue";
export default {
    components: {
        PostSearch
    },
    props: {
        posts: {
            type: Array,
            required: true
        }
    }
}
</script>
