<template>
  <div id="description">
    <div class="about-us">
      <h2>ABOUT US</h2>
      <p>
        {{ restaurant.description }}
      </p>
    </div>

    <div class="description-cover">
      <img :src="'/storage/' + restaurant.cover" alt="" />
    </div>
  </div>
</template>

<script>
export default {
  name: "DescriptionComponent",

  props: {
    restaurant: Object,
  },
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

#description {
  background: $brand-color;
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 50px;
  .about-us {
    width: 30%;
    margin-right: 50px;
    text-align: center;
    h2 {
      color: $primary-color;
    }
  }
  .description-cover {
    margin-left: 50px;
    img {
      width: 400px;
      border-radius: 20px;
    }
  }
}

@media screen and (max-width: 1024px) {
  #description {
    flex-direction: column;
    .about-us {
      width: 100%;
      margin: 0;
      p {
        margin-bottom: 2rem;
      }
    }
    .description-cover {
      width: 100%;
      margin: 0;
      img {
        width: 100%;
      }
    }
  }
}
</style>
