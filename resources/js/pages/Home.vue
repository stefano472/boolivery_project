<template>
  <div>
    <HeroComponent/>
    <ChiSiamoComponent/>
    <ParallaxComponent/>
    <RistorantiPiuCercatiComponent/>
    <CategoriePiuRichiesteComponent/>
    <ServiziComponent/>
    <CollaboraConNoiComponent/>
    <SocialComponent/>
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
import SocialComponent from '../components/home/SocialComponent.vue';

export default {
    name: 'Home',
    components: {
        HeroComponent,
        ChiSiamoComponent,
        ParallaxComponent,
        RistorantiPiuCercatiComponent,
        CategoriePiuRichiesteComponent,
        ServiziComponent,
        CollaboraConNoiComponent,
        SocialComponent,
    }
}
</script>

<style>

</style>