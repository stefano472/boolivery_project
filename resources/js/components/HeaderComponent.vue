<template >
  <div :key="headerKey" id="header">
    <div class="container2">
      <a class="logo" href="/">
        <img src="/logo.svg" alt="logo" />
        <p>oolivery</p>
      </a>
      <nav>
        <ul>
          <li>
            <a href="/restaurants">Ristoranti</a>
          </li>
          <li >
            <a href="/#about-us">About us</a>
          </li>
          <li >
              <a href="/#services">Servizi</a>
          </li>
          <li >
            <a href="/#collab">Collabora con noi</a>
          </li>
          <!-- <li v-if="this.$root._route.name === 'restaurant'">
            <a href="#my-menu">Menu</a>
          </li> -->
          <li>
            <a href="#contacts">Contatti</a>
          </li>
        </ul>
      </nav>
      <div class="cart-login">
        <div class="accedi">
          <a href="/login">Accedi</a>
        </div>
        <i @click="openModal" class="cart fa-solid fa-cart-shopping">
          <div v-if="totalQuantity() > 0" class="number-cart">
            <span>{{ totalQuantity() }}</span>
          </div>
        </i>
        <div class="hamburger">
          <i
            @click="addActiveClassHamburger"
            class="fa-solid fa-bars fa-2x"
          ></i>
        </div>

        <!-- hamburger menu -->
        <div class="hamburger-menu">
          <ul>
            <li>
              <a href="/restaurants">Ristoranti</a>
            </li>
            <li >
              <a @click="addCloseClassHamburger" href="/#about-us">About us</a>
            </li>
            <li >
              <a @click="addCloseClassHamburger" href="/#services">Servizi</a>
            </li>
            <li >
              <a @click="addCloseClassHamburger" href="/#collab">Collabora con noi</a>
            </li>
            <li>
              <a @click="addCloseClassHamburger" href="#contacts">Contatti</a>
            </li>
            <li>
              <a  href="/login">Accedi</a>
            </li>
          </ul>
          <a href="#" class="close" @click="addCloseClassHamburger">
            <i class="fas fa-times"></i>
          </a>
        </div>

        <div>
          <div id="modal-container" :class="activeModal ? 'sp-show' : ''">
            <div class="sp-modal">
              <i @click="closeModal" class="close-modal fa-solid fa-xmark"></i>
              <!-- <button id='closeModal' @click="closeModal" type="button">X</button> -->
              <div class="title">
                <h2>Your Cart</h2>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>

              <div class="cart">
                <div v-for="(item, index) in cartSorted" :key="index">
                  <div class="dish-cart">
                    <div class="dish-img">
                      <img :src="'/storage/' + item.cover" alt="" />
                    </div>
                    <div class="definition">
                      <h5>{{ item.name }}</h5>
                      <div class="dish-specs">
                        <p class="quantity">
                          <i
                            @click="reduceQuantity(item, index)"
                            class="fa-solid fa-minus"
                          ></i>
                          <span>
                            {{ item.quantity }}
                          </span>
                          <i
                            @click="addQuantity(item)"
                            class="fa-solid fa-plus"
                          ></i>
                        </p>
                        <p>&euro; {{ totalPrice(item) }}</p>
                        <i
                          @click="removeItem(index)"
                          class="remove fa-solid fa-trash-can"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="checkout">
                <div class="total-price">
                  <span v-if="checkoutPrice() > 0">
                    Totale: &euro; {{ checkoutPrice() }}
                  </span>

                  <router-link
                    v-if="checkoutPrice() > 0"
                    class="btn checkout-btn"
                    :to="{ name: 'payment' }"
                    >Checkout</router-link
                  >

                  <button v-else class="btn checkout-btn">Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HeaderComponent",
  data() {
    return {
      activeModal: false,
      headerKey: 0,
      // checkoutPrice: 0,
    };
  },

  props: {
    cart: Array,
  },

  methods: {
    removeItem(index) {
      this.cart.splice(index, 1);
      console.log(this.cart);
      // const items = JSON.parse(localStorage.getItem('cart'));

      // items.splice(index)
      // console.log(items);
      // const cart = JSON.stringify(items)
      localStorage.setItem("cart", JSON.stringify(this.cart));
    },
    reduceQuantity(dish, index) {
      dish.quantity -= 1;
      if (dish.quantity < 1) {
        this.removeItem(index);
      }
      localStorage.setItem("cart", JSON.stringify(this.cart));
      this.headerKey ++;
    },
    addQuantity(dish) {
      dish.quantity += 1;
      localStorage.setItem("cart", JSON.stringify(this.cart));
      this.headerKey ++;
    },
    totalQuantity() {
      let quantity = 0;
      this.cart.forEach((dish) => {
        quantity += dish.quantity;
      });
      return quantity;
    },
    totalPrice(dish) {
      const total = dish.price * dish.quantity;
      // this.checkoutPrice += total;
      return total.toFixed(2);
    },
    checkoutPrice() {
      let total = 0;
      this.cart.forEach((dish) => {
        total += dish.price * dish.quantity;
      });
      return total.toFixed(2);
    },
    openModal() {
      // console.log('cart', this.cart)
      // for (let i = 0; i<this.cart.length; i++){
      //     if (this.cart.includes(this.cart[i])){
      //         this.quantity += 1
      //     }
      // }
      this.activeModal = true;
      this.$emit("cartActive", true)
    },
    closeModal() {
      this.activeModal = false;
      this.$emit("cartActive", false)
    },
    addActiveClassHamburger() {
      let hamburger = document.querySelector(".hamburger-menu");
      hamburger.classList.add("active");
      this.$emit("cartActive", true)
    },
    addCloseClassHamburger() {
      let hamburger = document.querySelector(".hamburger-menu");
      hamburger.classList.remove("active");
      this.$emit("cartActive", false)
    },
  },

  computed: {
      cartSorted(){
          return this.cart.sort()
          // console.log('cart head', localStorage.cart);
          // return JSON.parse(localStorage.cart);
      }
  }
};
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

#header {
  position: fixed;
  width: 100%;
  z-index: 2;
}

#header {
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    margin: 0;
    padding: 0;
  }
  background: $dark-color;
  .container2 {
    color: $brand-color;
    height: 70px;
    max-width: 1400px;
    margin-inline: auto;
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    .logo {
      cursor: pointer;
      text-decoration: underline;
      color: $brand-color;
      display: flex;
      gap: 0.1rem;
      img {
        width: 100%;
      }
      p {
        font-size: 2.2rem;
        margin-top: 0.4rem;
        font-family: "Josefin Sans", sans-serif;
      }
    }
    nav {
      display: flex;
      align-items: center;
      ul {
        display: flex;
        gap: 1.5rem;
        li {
          a {
            color: $brand-color;
            padding-bottom: 0.75rem;
            transition: 0.2s;
            cursor: pointer;
            &:hover {
              color: $white_color;
              text-decoration: none;
              // transform: scale(1.30);
              box-shadow: inset 0 -3px 0 0 white;
            }
          }
        }
      }
    }
    .cart-login {
      display: flex;
      align-items: center;
      gap: 1rem;
      .accedi{
        a{
          transition: 0.2s;
          padding-bottom: 0.75rem;
          &:hover {
            box-shadow: inset 0 -3px 0 0 white;
          }
        }
      }
      a {
        color: $brand-color;
        cursor: pointer;
        &:hover {
          color: $white_color;
          text-decoration: none;
          // transform: scale(1.30);
        }
      }

      .hamburger {
        display: none;
        cursor: pointer;
        &:hover{
          color: white
        }
      }

      .hamburger-menu {
        position: absolute;
        top: 0;
        left: 0;
        display: none;
        padding: 20px;
        width: 100%;
        height: 100%;
        min-width: 100vw;
        min-height: 100vh;
        background: $brand-color;
        z-index: 100;

        ul {
          display: flex;
          height: 100%;
          flex-direction: column;
          justify-content: space-around;
          align-items: center;
          list-style: none;
        }

        li a {
          color: $primary-color;
          text-decoration: none;
          font-size: 25px;
          cursor: pointer;
        }

        .close {
          display: block;
          position: absolute;
          right: 35px;
          top: 20px;
          color: $primary-color;
          font-size: 35px;
          text-decoration: none;
          &:hover{
            color: white;
          }
        }
      }

      i.cart {
        position: relative;
        font-size: 1.2rem;
        cursor: pointer;
        height: 1.5rem;
        width: 1.5rem;
        display: grid;
        place-content: center;
        padding: 1.5rem;
        border-radius: 50%;
        transition: 0.2s;
        &:hover {
          transform: scale(1.1);
          color: $white-color;
          background: $primary-color;
        }
        .number-cart {
          position: absolute;
          right: 0;
          font-size: 18px;
        }
      }
      #modal-container {
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
        display: flex;
        justify-content: flex-end;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
        .dish-cart {
          display: flex;
          align-items: center;
          border-bottom: 1px solid lightgray;
          // border-radius: 10px;
          padding: 0.5rem;
          gap: 1rem;
          .dish-img {
            width: 20%;
            img {
              width: 100%;
              border-radius: 10px;
              max-height: 40px;
              object-fit: cover;
            }
          }
          .definition {
            width: 100%;
            .dish-specs {
              margin-top: 0.5rem;
              display: flex;
              justify-content: space-between;
              align-items: center;
              .quantity {
                display: flex;
                gap: 0.4rem;
                i {
                  cursor: pointer;
                  width: 1rem;
                  height: 1rem;
                  padding: 0.6rem;
                  border-radius: 5px;
                  background: $brand-color;
                  display: grid;
                  place-content: center;
                }
              }
              .remove:hover {
                cursor: pointer;
                color: lightcoral;
              }
            }
          }
        }
        &.sp-show {
          pointer-events: auto;
          opacity: 1;
        }
        .sp-modal {
          display: flex;
          flex-direction: column;
          background: white;
          padding: 2rem;
          border-radius: 0.5rem;
          width: min(400px, 100%);
          box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
          // text-align: center;
          min-height: 60%;
          height: fit-content;
          position: relative;
          .checkout {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
          }
          .total-price {
            font-size: 1.2rem;
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;

            .checkout-btn {
              color: #fff;
              background-color: $secondary-color;
              border-color: $secondary-color;
              &:hover {
                background-color: $primary-color;
                border-color: $primary-color;
              }
            }
          }
        }
        .title {
          display: flex;
          align-items: center;
          gap: 1rem;
          margin-bottom: 1.5rem;
          i {
            font-size: 1.5rem;
          }
        }
        // p {
        // font-size: 0.9rem;
        // opacity: 0.7;
        // margin: 1rem 0;
        // }
        .close-modal {
          color: $white-color;
          position: absolute;
          top: 2rem;
          right: 2rem;
          height: 2rem;
          width: 2rem;
          padding: 0.5rem;
          border-radius: 5px;
          background: $secondary-color;
          /* display: flex; */
          /* justify-content: center; */
          /* align-items: center; */
          display: grid;
          place-content: center;
          cursor: pointer;
          &:hover {
            background: $primary-color;
          }
        }
      }
    }
  }
}

@media screen and (max-width: 992px) {
  #header {
    margin-inline: auto;
    //max-width: 992px;
    max-width: 992px;
    .container2 {
      width: 100%;
    }
  }
}

@media screen and (max-width: 830px) {
  #header {
    margin-inline: auto;
    max-width: 768px;
    //width: 100%;
    .container2 {
      width: 100vw;
      nav {
        display: none;
      }
      .cart-login {
        .accedi {
          display: none;
        }
        .hamburger {
          display: block;
        }
        .hamburger-menu.active {
          display: block;
        }
      }
    }
  }
}

@media screen and (max-width: 576px) {
  #header {
    margin-inline: auto;
    max-width: 576px;
    //width: 100%;

    .container2 {
      width: 100vw;
      nav {
        display: none;
      }
      .cart-login {
        //display: none;
        .hamburger {
          display: block;
        }
        .hamburger-menu.active {
          display: block;
        }
      }
    }
  }
}

@media screen and (max-width: 300px) {
  #header {
    margin-inline: auto;
    max-width: 370px;
    //width: 100%;

    .container2 {
      width: 100vw;
      nav {
        display: none;
      }
      .cart-login {
        display: none;

        .hamburger {
          display: block;
        }
        .hamburger-menu.active {
          display: block;
        }
      }
    }
  }
}
</style>
