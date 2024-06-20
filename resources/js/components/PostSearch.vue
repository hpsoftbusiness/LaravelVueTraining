<template>
    <div>
        <h1>Search for post</h1>
        <input v-model="message" placeholder="search for post" />
        <button @click="fetchData">Search</button>
        <p>Response from server: {{ response }}</p>
        <p>Searched phrase : {{ message }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: '',
            response: ''
        }
    },
    methods: {
        async fetchData() {
            try {
                const res = await fetch('/posts/ajax', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ query: this.message })
                });
                this.response = await res.json();
            } catch (error) {
                console.error('Error:', error);
                this.response = 'An error occurred';
            }
        }
    }
}
</script>
