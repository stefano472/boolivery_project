<template>
   <div>

    <div class="restaurants-list">
        <RestaurantCard :restaurants="restaurants"/>
    </div>
     
  </div>
</template>

<script>

import RestaurantCard from './RestaurantCard.vue'
export default {
name: 'FilterComponent',

components:{
    RestaurantCard
},

props:{
    restaurants: Array, 
}
}
</script>

<style>

</style>