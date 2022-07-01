<template>
  <div>
    <HeaderComponent :cart="cart"/>
    <router-view @addToCart="addToCart"/>
    <!-- oppure 
    <router-view></router-view> -->
    <SocialComponent/>
    <FooterComponent/>
   
  </div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';
import SocialComponent from '../components/home/SocialComponent.vue';

export default {
    name: 'App',

    data(){

      return {
        cart: [],

        // addToCart: this.addToCart(),

      }
    },


    components: { 
        HeaderComponent,
        FooterComponent,
        SocialComponent
    },

    methods:{
      addToCart(dish){
            console.log('AppVue emitted', dish );

            this.cart.push(dish);

            localStorage.setItem('cart', JSON.stringify(this.cart));
        }
    },

    mounted(){

     
      if (localStorage.cart) {
        this.cart = JSON.parse(localStorage.cart);
      }else{
        this.cart = []
      }
    },

    // watch:{
    //   cart(dish){
    //     localStorage.cart += dish;
    //   }
    // }
}
</script>

<style lang="scss">
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Epilogue', sans-serif;
    // font-family: 'Josefin Sans', sans-serif;
}
ul{
    list-style-type: none;
    margin: 0;
}
</style>