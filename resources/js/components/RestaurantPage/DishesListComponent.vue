<template>
  <div class="dishes-list" id="my-menu">
    <div class="container" v-scrollAnimation>
      <!-- I nostri piatti -->
      <div class="title">
        <h2>I NOSTRI PIATTI</h2>
      </div>

      <!-- lista dei piatti -->
      <div>
        <DishCard :dishes="dishes" @addToCart="addToCart" />
      </div>
    </div>
  </div>
</template>

<script>
import DishCard from "./DishCard.vue";

export default {
  name: "DishesListComponent",

  data() {
    return {
      dishes: [],
    };
  },

  components: {
    DishCard,
  },

  mounted() {
    const id = this.$route.params.id;

    console.log(id);

    window.axios
      .get(
        "http://127.0.0.1:8000/api/restaurant/dishes/" + this.$route.params.id
      )
      .then(({ status, data }) => {
        console.log("data dishes: ", data);
        if (status === 200) {
          this.dishes = data.response;

          console.log(this.dishes);
        }
      })
      .catch((e) => console.log(e));

    // this.axiosCall();
  },

  methods: {
    addToCart(dish) {
      console.log("DishList emitted", dish);

      this.$emit("addToCart", dish);
    },
  },
};
</script>

<style lang="scss" scoped>
.container {
  padding: 50px;
  h2 {
    text-align: center;
  }
}
</style>
