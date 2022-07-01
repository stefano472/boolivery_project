<template>
   <div>
     <div v-for="(restaurant, index) in restaurants" :key="index">
     
        <img :src="restaurant.cover" alt="Cover Ristorante">

        <p>{{restaurant.name}}</p>
        
        <p>{{restaurant.description}}</p>

        

    </div>
  </div>
</template>

<script>
export default {
name: 'RestaurantCard',

props:{
    restaurants: Array, 
}
}
</script>

<style lang="scss" scoped>
    img{
        width: 150px;
    }
</style>