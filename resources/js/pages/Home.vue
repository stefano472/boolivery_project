<template>
  <div>
    <i @click="scrollToTop()" v-if="scY > 100 && !carrelloAttivo" class="fa-solid fa-circle-arrow-up btn-totop"></i>
    <HeroComponent />
    <ChiSiamoComponent />
    <ParallaxComponent />
    <RistorantiPiuCercatiComponent :restaurants="restaurants" />
    <CategoriePiuRichiesteComponent @categorySelected='categorySelected' />
    <ServiziComponent />
    <CollaboraConNoiComponent />
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
        scTimer: 0,
        scY: 0,
      }
    },
    props: {
      carrelloAttivo: Boolean
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
    },
    // computed:{
    //   posScroll() {

    //   }
    // },

    mounted(){

        window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {

            if (status === 200) {
                this.restaurants = data.response
            }
        }).catch(e => console.log(e))

        // this.axiosCall();

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
