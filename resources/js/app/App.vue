<template>
  <div v-if="this.$root._route.name === 'payment' || this.$root._route.name === 'success' || this.$root._route.name === 'notFound' ">

    <router-view @addToCart="addToCart" :cart="cart" />
  </div>
  <div v-else>
    <HeaderComponent :cart="cart" />
    <div id="modal-container-app" :class="activeModalApp ? 'sp-show' : ''">
      <div class="sp-modal">
        <!-- <button id='closeModal' @click="closeModal" type="button">X</button> -->
        <h2>Attenzione!!</h2>
        <div class="title">
          <p>
            puoi aggiungere al carrello, solo i piatti di un solo ristorante
          </p>
          <i @click="closeModal" class="close-modal fa-solid fa-xmark"></i>
        </div>
      </div>
    </div>
    <router-view :categoriaSelezionataHome='categoriaSelezionataHome' @addToCart="addToCart" @categorySelected='categorySelected' />
    <!-- oppure

    <router-view></router-view> -->
    <!-- {{this.$router}} -->
    <SocialComponent />
    <FooterComponent />
  </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
import SocialComponent from "../components/home/SocialComponent.vue";

export default {
  name: "App",

  data() {
    return {
      cart: [],
      activeModalApp: false,
      categoriaSelezionataHome : undefined,
      // quantity: 0,

      // addToCart: this.addToCart(),
    };
  },

  components: {
    HeaderComponent,
    FooterComponent,
    SocialComponent,
  },

  methods: {
    categorySelected(idCategory) {
      console.log('id categoria from home', idCategory)
      this.categoriaSelezionataHome = idCategory
      console.log(this.categoriaSelezionataHome, 'cate selezionata')
    },
    remove() {
      this.activeComponent = false;
    },
    openModal() {
      this.activeModalApp = true;
    },
    closeModal() {
      this.activeModalApp = false;
    },
    addToCart(dish) {
      // console.log('AppVue emitted', dish.restaurant_id );
      // console.log('cart', this.cart)
      if (this.cart.length === 0) {
        console.log("no cart");
        dish.quantity = 1;
        this.cart.push(dish);
        localStorage.setItem("cart", JSON.stringify(this.cart));
      } else {
        if (this.cart[0].restaurant_id === dish.restaurant_id) {
          const product = this.cart.find((o) => o.id === dish.id);
          if (product) {
            // const contatore = dish.quantity + 1 ;
            // dish.quantity = contatore
            product.quantity += 1;
            // console.log('entro nel if ', contatore)
            localStorage.setItem("cart", JSON.stringify(this.cart));
          } else {
            console.log("entra nell'else", this.cart);
            (dish.quantity = 1), this.cart.push(dish);
            localStorage.setItem("cart", JSON.stringify(this.cart));
          }
          // if (!this.cart.includes(dish)){
          //   dish.quantity = 1;
          //   console.log('entra nell\'if', this.cart);
          //   this.cart.push(dish);
          //   localStorage.setItem('cart', JSON.stringify(this.cart));
          // } else {
          //   const contatore = dish.quantity + 1 ;
          //   dish.quantity = contatore;
          //   // console.log('entro nel else', contatore);
          //   localStorage.setItem('cart', JSON.stringify(this.cart));
          // }
        } else {
          this.activeModalApp = true;
        }
      }
    },
  },

  mounted() {
    console.log("console", this.$root._route.name);
    if (localStorage.cart) {
      this.cart = JSON.parse(localStorage.cart);
    } else {
      this.cart = [];
    }
  },

  // watch:{
  //   cart(dish){
  //     localStorage.cart += dish;
  //   }
  // }
};
</script>

<style lang="scss">
@import "resources/sass/variables";

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Epilogue", sans-serif;
  // font-family: 'Josefin Sans', sans-serif;
}
h1 {
  height: auto;
}
ul {
  list-style-type: none;
  margin: 0;
}
#modal-container-app {
  color: $dark-color;
  background: rgba($color: #000000, $alpha: 0.5);
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 100vw;
  z-index: 10;
  // display: grid;
  // place-content: center;
  display: grid;
  place-content: center;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
  &.sp-show {
    pointer-events: auto;
    opacity: 1;
  }
  .sp-modal {
    background: white;
    padding: 2rem;
    border-radius: 0.5rem;
    // width: min(400px, 100%);
    box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
    // text-align: center;
    // position: relative;
    h2 {
      text-align: center;
    }
    .title {
      display: flex;
      align-items: center;
      gap: 1rem;
      i {
        font-size: 1.5rem;
      }
      p {
        margin: 0;
        padding: 0;
      }
    }
    // p {
    // font-size: 0.9rem;
    // opacity: 0.7;
    // margin: 1rem 0;
    // }
    .close-modal {
      color: $white-color;
      // position: absolute;
      // top: 2rem;
      // right: 2rem;
      height: 2rem;
      width: 2rem;
      padding: 0.5rem;
      border-radius: 5px;
      background: $brand-color;
      /* display: flex; */
      /* justify-content: center; */
      /* align-items: center; */
      display: grid;
      place-content: center;
      cursor: pointer;
      &:hover {
        background: $secondary-color;
      }
    }
  }
}
</style>
