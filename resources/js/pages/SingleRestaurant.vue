<template>
  <div>
    <HeroComponent :restaurant="restaurant"/>
    <DescriptionComponent :restaurant="restaurant"/>
    <DishesListComponent :restaurant="restaurant"/>
    <InfoRestaurantComponent :restaurant="restaurant"/>
  </div>
</template>

<script>

import HeroComponent from '../components/RestaurantPage/HeroComponent.vue';
import DescriptionComponent from '../components/RestaurantPage/DescriptionComponent.vue';
import DishesListComponent from '../components/RestaurantPage/DishesListComponent.vue';
import InfoRestaurantComponent from '../components/RestaurantPage/InfoRestaurantComponent.vue';

export default {
    name: 'SingleRestaurant',

    data(){
      return{
        restaurant: {},
      }
    },

    components: {
        HeroComponent,
        DescriptionComponent,
        DishesListComponent,
        InfoRestaurantComponent
    },

    methods:{

    axiosCall() {
      const id = this.$route.params.id;

      console.log(id);

      window.axios
        .get('http://127.0.0.1:8000/api/restaurant/' + this.$route.params.id).then(({status, data}) => {
          
          console.log('data: ', data.response[0]);

          if (status === 200) {
            
                this.restaurant = data.response[0];

                console.log('RESTAURANT!', this.restaurant);
            }

        })
        .catch((e) => console.log(e));
    },
  },

  mounted(){


        this.axiosCall();

    },

}
</script>

<style>

</style>
