<template>
  <div class="dishes-list">

    <div class="container">
        <!-- I nostri piatti -->
        <div class="title">
            <h1>I NOSTRI PIATTI</h1>
        </div>

        <!-- lista dei piatti -->
        <div>
            <DishCard :dishes="dishes"/>
        </div>
    </div>
    
  </div>
</template>

<script>

import DishCard from './DishCard.vue';

export default {
    name: 'DishesListComponent',

    data(){
        return {
            dishes: [],
        }
    },

    components: {
        DishCard
    },

    mounted(){
        const id = this.$route.params.id;

      console.log(id);

      window.axios
        .get('http://127.0.0.1:8000/api/restaurant/dishes/' + this.$route.params.id)
        .then(({status, data}) => {

          console.log( 'data: ', data)
          if (status === 200) {
            
                this.dishes = data.response

                console.log(this.dishes);
            }

        })
        .catch((e) => console.log(e));

        // this.axiosCall();

    },

}
</script>

<style lang="scss" scoped>
    h1{
        text-align: center;
    }
</style>
