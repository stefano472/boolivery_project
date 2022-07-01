<template>
  <div>
    <CategoriesComponent />
    <FilterComponents :restaurants="restaurants"/>
  </div>
</template>

<script>

import CategoriesComponent from '../components/RestaurantsListPage/CategoriesComponent.vue';
import FilterComponents from '../components/RestaurantsListPage/FilterComponents.vue';

export default {
    name: 'SingleRestaurant',
    components: {
        CategoriesComponent,
        FilterComponents,
    },

    data(){

        return {
            restaurants: []
        }
        
    },

    mounted(){
        
        window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {

            if (status === 200 && data.success) {
                this.restaurants = data.results
            }
        }).catch(e => console.log(e))
    }
}
</script>

<style>

</style>
