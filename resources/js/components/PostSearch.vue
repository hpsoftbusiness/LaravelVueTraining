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
            response: '',
            resp:'',
            formData: {
                id: '',
                title: '',
                body: ''
            },
        }
    },
    methods: {
        fetchData() {
         axios.post('/post/ajax', { query: this.message })
              .then(response => {
                  this.response = response.data;
              })
        }
    }
}
</script>
