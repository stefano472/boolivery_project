<template>
   <div>
     <div v-for="(restaurant, index) in restaurants" :key="index">

        <p>{{restaurant.name}}</p>
        

    </div>
  </div>
</template>

<script>
export default {
name: 'FilterComponent',

props:{
    restaurants: Array, 
}
}
</script>

<style>

</style>