<template>
  <v-app>
<root-nav></root-nav>   
 <v-content> 
 <router-view></router-view>
 </v-content>
  </v-app>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
