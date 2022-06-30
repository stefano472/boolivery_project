<template>
  <div class="dishes-list">

    <div class="container">
        <!-- I nostri piatti -->
        <div class="title">
            <h1>I NOSTRI PIATTI</h1>
        </div>

        <!-- lista dei piatti -->
        <div>
            <DishCard />
        </div>
    </div>
    
  </div>
</template>

<script>

import DishCard from './DishCard.vue';

export default {
    name: 'DishesListComponent',

    components: {
        DishCard
    }

}
</script>

<style lang="scss" scoped>
    h1{
        text-align: center;
    }
</style>
