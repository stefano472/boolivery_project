<template>
  <div>
    <!-- Card del piatto -->
    <div v-for="(dish, index) in dishes" :key="index" v-scrollAnimation>

      <div class="dish-card" v-if="dish.available === 1">
        <!-- foto del piatto -->
        <div class="foto">
          <img :src="'/storage/' + dish.cover" alt="Dish" />
        </div>

        <!-- nome e descrizione del piatto -->
        <div class="name-description">
          <!-- name -->
          <div class="dish-name">
            <h3>{{ dish.name }}</h3>
          </div>

          <!-- description -->
          <div class="dish-description">
            <p>{{ dish.description }}</p>
          </div>
        </div>

        <!-- prezzo e aggiungi al carrello -->
        <div class="price add-to-cart">
          <!-- prezzo -->
          <div class="price-dish">
            <p>&euro;{{ dish.price.toFixed(2) }}</p>
          </div>

          <!-- pulsante di aggiunta al carrello -->
          <div class="add-to-cart-btn">
            <button class="btn btn-outline-info" @click="addToLocalStorage(dish)">
              Add to cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DishCard",
  data() {
    return {
      cart: [],
    };
  },
  props: {
    dishes: Array,
  },

  methods: {
    addToLocalStorage(dish) {
      console.log(dish);

      /*this.cart.push(item);

            console.log(this.cart);

            localStorage.setItem('cart', JSON.stringify(this.cart))

            */
      this.$emit("addToCart", dish);
    },
  },
};
</script>

<style lang="scss" scoped>
.dish-card {
  display: flex;
  justify-content: space-around;
  padding: 30px 20px;
  border-bottom: 1px solid lightgray;
  // border-radius: 20px;
  margin: 31px 0;

  //foto del piatto
  .foto {
    width: 250px;
    img {
      width: 100%;
      border-radius: 20px;
      min-width: 146px;
      max-height: 180px;
      object-fit: cover;
    }
  }

  // nome e descrizione del piatto
  .name-description {
    flex-grow: 1;
    margin-inline: 1rem;
    padding: 0 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    row-gap: 20px;
    .dish-name {
      h2 {
        color: #1e282f;
      }
    }
    .dish-description {
      p {
        color: #8c9e9e;
      }
    }
  }

  .price.add-to-cart {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    .price-dish {
      font-size: 25px;
    }
  }
}

@media screen and (max-width: 484px) {
  .dish-card {
    flex-wrap: wrap;
    //foto del piatto
    .foto {
      width: 100%;
      margin-bottom: 17px;
      img {
        width: 100%;
        border-radius: 20px;
      }
    }

    // nome e descrizione del piatto
    .name-description {
      width: 100%;
      text-align: center;
    }

    .price.add-to-cart {
      align-items: center;
    }
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
</style>
