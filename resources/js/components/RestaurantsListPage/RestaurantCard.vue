<template>
  <div class="restaurant-list">
    <div
      v-for="(restaurant, index) in restaurants"
      :key="index"
      class="restaurant-card"
       v-scrollAnimation
    >
      <div class="foto" v-if="restaurant.cover">
        <img :src="'/storage/' + restaurant.cover" alt="Cover Ristorante" />
      </div>
      <div class="name-description">
        <h2>{{ restaurant.name }}</h2>
        <!-- <p>
          <strong>{{ restaurant.category_name }}</strong>
        </p> -->
        <p>{{ restaurant.motto }}</p>
      </div>

      <div class="show-restaurant">
        <router-link :to="{ name: 'restaurant', params: { ...restaurant } }">
          <button class="btn btn-outline-info">Vai al Ristorante</button>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "RestaurantCard",

  props: {
    restaurants: Array,
  },
  mounted() {
    console.log("restaurant card", this.restaurants);
  },
};
</script>

<style lang="scss" scoped>
.restaurant-list {
  max-height: 500px;
  overflow-y: auto;

  // // // // // // custom scrollbar
  &::-webkit-scrollbar {
    width: 1rem;
  }
  &::-webkit-scrollbar-track {
    margin-block: 0.5rem;
    background-color: transparent;
  }
  &::-webkit-scrollbar-thumb {
    border-radius: 0.8rem;
    border: 4px solid transparent;
    box-shadow: inset 0 0 10px 10px lightgray;
  }
  // // // // // // custom scrollbar

  .restaurant-card {
    display: flex;
    justify-content: space-between;
    padding: 0 20px 30px;
    border-bottom: 1px solid lightgray;
    // border-radius: 20px;
    margin: 30px 2px 0 0;

    //foto del piatto
    .foto {
      width: 250px;
      img {
        width: 100%;
        border-radius: 20px;
        min-width: 146px;
      }
    }

    // nome e descrizione del piatto
    .name-description {
      flex-grow: 1;
      padding: 0 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      row-gap: 10px;
    }

    .show-restaurant {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      .price-dish {
        font-size: 25px;
      }
    }

    .btn-outline-info {
      background-color: transparent;
      color: #38a3a5;
      border-color: #38a3a5;
      &:hover {
        color: white;
        background-color: #38a3a5;
        border-color: #38a3a5;
      }
    }
  }
}

@media screen and (max-width: 991px) {
  .restaurant-list {
    margin: 30px 0 0 0;
    .restaurant-card {
      flex-wrap: wrap;
      row-gap: 0;
      margin: 0;
      padding: 30px 20px;
      text-align: center;
      justify-content: center;
      .foto {
        margin-bottom: 20px;
      }
    }
  }
}

@media screen and(max-width: 496px) {
  .restaurant-list{
    .restaurant-card{
      text-align: center;
      justify-content: center;
    }
  }
  
}
</style>
