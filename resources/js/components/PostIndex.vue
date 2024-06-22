<template>
    <div class="container">
        <h1>Latest blog posts</h1>
        <br>
        <post-search></post-search>
        <a href="/post/new"><button class="btn btn-primary" >Add new post</button></a>
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
