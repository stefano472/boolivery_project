<template>
  <div>
    <HeroComponent />
    <DescriptionComponent />
    <DishesListComponent />
    <InfoRestaurantComponent />
  </div>
</template>

<script>

import HeroComponent from '../components/RestaurantPage/HeroComponent.vue';
import DescriptionComponent from '../components/RestaurantPage/DescriptionComponent.vue';
import DishesListComponent from '../components/RestaurantPage/DishesListComponent.vue';
import InfoRestaurantComponent from '../components/RestaurantPage/InfoRestaurantComponent.vue';

export default {
    name: 'SingleRestaurant',
    components: {
        HeroComponent,
        DescriptionComponent,
        DishesListComponent,
        InfoRestaurantComponent
    }
}
</script>

<style>

</style>
