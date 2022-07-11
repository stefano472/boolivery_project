<template>
  <div>
    <i @click="scrollToTop()" v-if="scY > 100 && !carrelloAttivo" class="fa-solid fa-circle-arrow-up btn-totop"></i>
    <HeroComponent :restaurant="restaurant"/>
    <DescriptionComponent :restaurant="restaurant"/>
    <DishesListComponent :restaurant="restaurant"  @addToCart="addToCart"/>
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
        scTimer: 0,
        scY: 0,
      }
    },

    components: {
        HeroComponent,
        DescriptionComponent,
        DishesListComponent,
        InfoRestaurantComponent
    },

    props: {
      carrelloAttivo: Boolean
    },

    methods:{
        scrollToTop(){
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        },
        handleScroll() {
          if (this.scTimer) return;
          this.scTimer = setTimeout(() => {
            this.scY = window.scrollY;
            clearTimeout(this.scTimer);
            this.scTimer = 0;
          }, 100);
        },

        axiosCall() {
          const id = this.$route.params.id;

          window.axios
            .get('http://127.0.0.1:8000/api/restaurant/' + this.$route.params.id).then(({status, data}) => {
              

              if (status === 200) {
                
                    this.restaurant = data.response[0];

                    console.log('RESTAURANT!', this.restaurant);
                }

            })
            .catch((e) => console.log(e));
        },

        addToCart(dish){
                  console.log('SingleRestaurant emitted', dish );

                  this.$emit('addToCart', dish )
            }
        },

        mounted(){


              this.axiosCall();

        },

        created () {
          window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
          window.removeEventListener('scroll', this.handleScroll);
        },

}
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

.btn-totop{
    // display: none;
    position: fixed;
    bottom: 20px;
    right: 25px;
    z-index: 99;
    font-size: 30px;
    border: none;
    outline: none;
    background-color: $primary-color;
    color: white;
    cursor: pointer;
    padding: 8px;
    // border-radius: 50%;
    border-radius: 10px;
    transition: 0.3s;
    box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
    &:hover{
      transform: scale(1.05);
    }
}
</style>
