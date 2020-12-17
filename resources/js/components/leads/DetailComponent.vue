<template>
<div class="container">
      <router-link class="btn btn-xs btn-link" :to="{name: 'home'}">
        Back
      </router-link>    
      <table  class="table">
         <tbody id="pannel">
            <tr><td>icon</td><td></td></tr>
            <tr><td>date</td><td>{{ lead.date }}</td></tr>
            <tr><td>name</td><td>{{ lead.name }}</td></tr>       
            <tr><td>phone</td><td>{{ lead.customer.phone }}</td></tr>
            <tr><td>email</td><td>{{ lead.email }}</td></tr>
        </tbody>    
      </table>  
</div>    
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            axios.get('/show/' + id)
                .then(function (resp) {
                    app.lead = resp.data;
                })
                .catch(function (resp) {
                    alert("Could not load your lead")
                });
        },
        data: function () {
            return {
                lead: {}
            }
        },
        methods: {
           //...
        }
    }
</script>
