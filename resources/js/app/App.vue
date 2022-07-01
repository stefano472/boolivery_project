<template>
  <div>
    <HeaderComponent/>
    <router-view/>
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
    components: { 
        HeaderComponent,
        FooterComponent,
        SocialComponent
    },
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