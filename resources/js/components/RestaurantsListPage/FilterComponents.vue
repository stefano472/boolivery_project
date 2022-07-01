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

// data(){
//     return {
//         inputSearch: '',
//     }
// },

// methods:{
//     getInput(){

//         console.log('click');

//         console.log(this.inputSearch);

//         this.$emit(this.inputSearch, 'filterRestaurants');
//     }
// },

components:{
    RestaurantCard
},

props:{
    restaurants: Array, 
}
}
</script>

<style scoped lang="scss">

</style>