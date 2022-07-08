<template>
  <div class="container-hero">
    <div class="info-resturant">
      <h1>{{ restaurant.name }}</h1>
      <h2>{{ restaurant.motto }}</h2>
      <!-- <h3>{{restaurant.name}}</h3> -->
      <!-- <button class="btn-go">Vai al ristorante</button> -->
    </div>
  </div>
</template>

<script>
export default {
  name: "HeroComponent",

  props: {
    restaurant: Object,
  },
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

.container-hero {
  display: flex;
  justify-content: center;
  background-image: url("/img/img_rest/jakub-kapusnak-4f4YZfDMLeU-unsplash-1024x683.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  text-align: center;
  padding-top: 70px;

  .info-resturant {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: $secondary-color;
    opacity: 0.9;
    padding: 50px 150px;
    margin: 100px 0;
    color: $dark-color;
  }

  h1 {
    color: $dark-color;
    font-size: 2.5rem;
    line-height: 40px;
    margin-bottom: 20px;
    width: 100%;
    height: auto;
  }
  h2 {
    font-size: 1.6rem;
  }
  p {
    color: $dark-color;
    line-height: 3rem;
    font-size: 16px;
    padding-top: 20px;
  }

  .btn-go {
    width: max-content;
    padding: 5px;
    background-color: transparent;
    cursor: pointer;
    margin: 20px 0;
  }
}

@media (max-width: 480px) {
  .info-resturant {
    padding: 50px 50px !important;
  }
}
</style>
