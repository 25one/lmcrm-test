<template>
      <table  class="table">
         <thead>
          <tr>
            <td>icon</td>
            <td>date</td>     
            <td>name</td>                    
            <td>phone</td>          
            <td>email</td>
            <td>detail</td>           
          </tr>  
          </thead>
         <tbody id="pannel">
            <tr v-for="lead, index in leads">
                <td></td>           
                <td>{{ lead.date }}</td>
                <td>{{ lead.name }}</td>
                <td>{{ lead.customer.phone }}</td>
                <td>{{ lead.email }}</td>
                <td>
                <router-link class="btn btn-xs btn-link" :to="{name: 'DetailComponent', params: {id: lead.id}}">
                        Detail
                </router-link>               
                </td>     
            </tr>
        </tbody>        
      </table>
</template>

<script>
    export default {
        data: function() {
           return {
              leads: leads,
             }
        },
        mounted() {
          //...
        },
        methods: {
           //...
        },
    }
</script>
