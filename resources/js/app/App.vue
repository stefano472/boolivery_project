<template>
  <div>
    <HeaderComponent/>
    <router-view/>
    <!-- oppure 
    <router-view></router-view> -->
    <FooterComponent/>
  </div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';

export default {
    name: 'App',
    components: { 
        HeaderComponent,
        FooterComponent,
    },
}
</script>

<style lang="scss">
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
ul{
    list-style-type: none;
    margin: 0;
}
</style>