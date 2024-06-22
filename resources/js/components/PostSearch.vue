<template>
            <div class="form-group row">
                <div class="col-sm-8">
                    <input type="text" v-model="message" class="form-control" placeholder="Search for post" id="usr" name="username">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary btn-block" @click="fetchData">Search</button>
                </div>
            </div>
     <p>{{ response }}</p>
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
                const res = await fetch('/post/ajax', {
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
