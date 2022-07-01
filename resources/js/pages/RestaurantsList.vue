<template>
  <div>
    <CategoriesComponent />
    <FilterComponents />
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
    }
}
</script>

<style>

</style>
