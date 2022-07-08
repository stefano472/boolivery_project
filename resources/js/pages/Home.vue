<template>
  <div>
    <HeroComponent/>
    <ChiSiamoComponent/>
    <ParallaxComponent/>
    <RistorantiPiuCercatiComponent :restaurants="restaurants"/>
    <CategoriePiuRichiesteComponent @categorySelected='categorySelected'/>
    <ServiziComponent/>
    <CollaboraConNoiComponent/>
  </div>
</template>

<script>
import HeroComponent from '../components/home/HeroComponent.vue';
import ChiSiamoComponent from '../components/home/ChiSiamoComponent.vue';
import ParallaxComponent from '../components/home/ParallaxComponent.vue';
import RistorantiPiuCercatiComponent from '../components/home/RistorantiPiuCercatiComponent.vue';
import CategoriePiuRichiesteComponent from '../components/home/CategoriePiuRichiesteComponent.vue';
import ServiziComponent from '../components/home/ServiziComponent.vue';
import CollaboraConNoiComponent from '../components/home/CollaboraConNoiComponent.vue';


export default {
    name: 'Home',
    data(){
      return {
        restaurants:[],
      }
    },
    components: {
        HeroComponent,
        ChiSiamoComponent,
        ParallaxComponent,
        RistorantiPiuCercatiComponent,
        CategoriePiuRichiesteComponent,
        ServiziComponent,
        CollaboraConNoiComponent,
    },
    methods:{
        categorySelected(idCategory) {
          this.$emit("categorySelected", idCategory);
        },
    },

    mounted(){

        window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {

            if (status === 200) {
                this.restaurants = data.response
            }
        }).catch(e => console.log(e))

        // this.axiosCall();

    },
}
</script>

<style>
</style>
