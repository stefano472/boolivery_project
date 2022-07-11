<template>
  <div>
    <div class="header">
      <div class="container">
        <a class="logo" href="/">
            <img src="/logo.svg" alt="logo">
            <p>oolivery</p>
        </a>
        <nav>
            <a href="/">Torna alla Home</a>
        </nav>
      </div>
      <svg class="wave">
        <use xlink:href='img/wave.svg#wave-1hkxOo'></use>
      </svg>
    </div>

    <h1>Stai ordinando da: {{restaurantSelected}}</h1>
    <div id="payment" class="">
      <div class="left-payment">

        <!-- {{cart[0]}} -->
        <!-- {{userEmail}} -->

        <!-- form dati utente -->
        <div v-if="!formComplete" class="form">
          <p>Inserisci i dati della consegna</p>

            <div class="action">

                <div class="input-box mb-2">

                    <label for="name">Nome *</label>
                    <br>
                    <input type="text" name="name" placeholder="Nome..."
                        v-model="name" 
                        class="form-control">
                    <div v-if="!validation.name.success" class="alert alert-danger">
                            {{validation.name.message}}
                    </div>

                </div>
                <div class="input-box mb-2">

                    <label for="surname">Cognome *</label>
                    <br>
                    <input type="text" name="surname" placeholder="Cognome..."
                        v-model="surname"
                        value=""
                        class="form-control" required>
                    <div v-if="!validation.surname.success" class="alert alert-danger">
                            {{validation.surname.message}}
                    </div>

                </div>
                <div class="input-box mb-2">

                    <label for="address">Indirizzo di consegna *</label>
                    <br>
                    <input type="text" name="address" placeholder="Indirizzo..."
                        v-model="address"
                        value=""
                        class="form-control" required>
                    <div v-if="!validation.address.success" class="alert alert-danger">
                            {{validation.address.message}}
                    </div>

                </div>

                <div class="input-box mb-2">

                    <label for="phone">Numero di telefono *</label>
                    <br>
                    <input type="number" name="phone" placeholder="+39...."
                        v-model="phone"
                        value=""
                        class="form-control" required>
                    <div v-if="!validation.phone.success" class="alert alert-danger">
                            {{validation.phone.message}}
                    </div>


                </div>

                <div class="input-box mb-2">

                    <label for="email">Email *</label>
                    <br>
                    <input type="email" name="email" placeholder="user@gmail.com"
                        v-model="email"
                        value=""
                        class="form-control" required>
                    <div v-if="!validation.email.success" class="alert alert-danger">
                            {{validation.email.message}}
                    </div>


                </div>

                <div class="input-box mb-2">

                    <label for="special_request">Richieste particolari</label>
                    <br>
                    <textarea v-model="special_request" name="special_request" id="" cols="30" rows="5" placeholder="Richieste particolari..."
                        class="form-control"
                        required></textarea>

                </div>

                <!-- ...content... -->

                <div class="d-flex justify-content-end">
                  <button @click="validateForm()" class="form-btn btn">Conferma i Dati</button>
                    <!-- <input id="createDish" type="submit" value="Salva" class="btn btn-outline-info text-decoration-none mr-2"> -->
                    <!-- <a href="{{ route('user.restaurant.index') }}" class="btn btn-outline-danger text-decoration-none">Annulla</a> -->
                </div>
            </div>
        </div>

        <div v-else class="payment-part">
          <!-- <p>Inserisci i dati del pagamento</p> -->
          <!-- <div class="dati-forniti">
            <p>{{formData.surname}} {{formData.name}}</p>
            <p>{{formData.address}}</p>
            <p>+39 {{formData.phone}}</p>
            <p>{{formData.email}}</p>

          </div> -->
          <Payment :formData="formData" :cart="cart" @changeData='changeData'/>
          <!-- <button @click="beforeBuy()">Procedi con l'acquisto 🎉</button> -->
        </div>

      </div>
      <div class="right-payment">
        <div class="cart-summary">
          <h2>
            Riepilogo ordine
          </h2>
          <div class="cart">
            <div class="cart-card" v-for="dish in cart" :key='dish.id'>
              <div class="dish-name">
                {{dish.name}}
              </div>
              <div class="dish-specs">
                <span>x{{dish.quantity}}</span>
                <span>&euro; {{dish.price.toFixed(2)}}</span>
              </div>
            </div>
          </div>
          <div class="totale">
            <p>
              Totale: 
            </p>
            <p>
              &euro; {{checkoutPrice()}}
            </p>
          </div>
        </div>
        <div v-if="formComplete" class="data-summary">
          <h2>Riepilogo dati</h2>
          <p>{{formData.surname}} {{formData.name}}</p>
          <p>{{formData.address}}</p>
          <p>+39 {{formData.phone}}</p>
          <p>{{formData.email}}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Payment from './Payment.vue';

export default {
  name: 'PaymentPage',
  // props: {
  //   cart:Array
  // },
  components: {
    Payment
  },
  data () {
    return {
      cart: [],
      restaurantSelected: '',
      restaurantId: '',
      userEmail: '',
      formComplete: false,

        // payed: false,

      name: null,
      surname: null,
      email: null,
      phone: null,
      address: null,
      special_request: null,
      formData: {
        name: null,
        surname: null,
        email: null,
        phone: null,
        address: null,
        status: null,
        total: null,
        special_request: null,
        plates: null,
        restaurant_id: null,
        restaurant_email: null,
      },
      validation: {
        name: {
          success: true,
          message: "",
        },
        surname: {
          success: true,
          message: "",
        },
        email: {
          success: true,
          message: "",
        },
        address: {
          success: true,
          message: "",
        },
        phone: {
          success: true,
          message: "",
        },
      }

    }
  },
  methods: {
    changeData(){
      this.formComplete=false
    },
    validateForm(){
      console.log('validation...');
      if (!this.name) {
        this.validation.name.success = false;
        this.validation.name.message = "Il nome non può essere vuoto";
      } else if (this.name.length > 30) {
        this.validation.name.success = false;
        this.validation.name.message =
          "Il nome non può superare i 30 caratteri";
      } else {
        this.validation.name.success = true;
        this.validation.name.message = "";
      }
      // validazione cognome
      if (!this.surname) {
        this.validation.surname.success = false;
        this.validation.surname.message = "Il cognome non può essere vuoto";
      } else if (this.surname.length > 30) {
        this.validation.surname.success = false;
        this.validation.surname.message =
          "Il cognome non può superare i 30 caratteri";
      } else {
        this.validation.surname.success = true;
        this.validation.surname.message = "";
      }
      // validazione email
      if (!this.email) {
        this.validation.email.success = false;
        this.validation.email.message = "La mail non può essere vuota";
      } else if (this.email.length > 255) {
        this.validation.email.success = false;
        this.validation.email.message =
          "La mail non può superare i 255 caratteri";
      } else if (
        !this.email.match(
          /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
        )
      ) {
        this.validation.email.success = false;
        this.validation.email.message = "Formato della mail non valido";
      } else {
        this.validation.email.success = true;
        this.validation.email.message = "";
      }
      //validazione indirizzo
      if (!this.address) {
        this.validation.address.success = false;
        this.validation.address.message = "L'indirizzo non può essere vuoto";
      } else if (this.address.length > 255) {
        this.validation.address.success = false;
        this.validation.address.message =
          "L'indirizzo non può superare i 255 caratteri";
      } else {
        this.validation.address.success = true;
        this.validation.address.message = "";
      }
      // validazione telefono
      if (!this.phone) {
        this.validation.phone.success = false;
        this.validation.phone.message = "Inserire il numero di telefono";
      } else if (isNaN(this.phone)) {
        this.validation.phone.success = false;
        this.validation.phone.message =
          "Il telefono deve essere composto da numeri";
      } else if (
        this.phone.length < 8 ||
        this.phone.length > 11
      ) {
        this.validation.phone.success = false;
        this.validation.phone.message =
          "Il telefono deve essere compreso tra gli 8 e gli 11 caratteri";
      } else {
        this.validation.phone.success = true;
        this.validation.phone.message = "";
      }
    
      this.isValidate();
    },
    isValidate() {
      let control = true;
      for(let i in this.validation) 
        if(!this.validation[i].success) 
          control = false;
      
      if(!control)
        return;
      //se tutto va bene
      // this.waitToken = true;
      this.formData.name = this.name;
      this.formData.surname = this.surname;
      this.formData.email = this.email;
      this.formData.phone = this.phone;
      this.formData.address = this.address;
      this.formData.status = 0;
      this.formData.total = this.checkoutPrice();
      this.formData.plates = this.cart;
      this.formData.special_request = this.special_request;
      
      this.formData.restaurant_id = this.restaurantId;
      this.formData.restaurant_email = this.userEmail;
      this.formComplete = true;
      },
    // beforeBuy(){
    //   this.$refs.paymentRef.$refs.paymentBtnRef.click()
    // },
    checkoutPrice(){
        let total = 0;
        this.cart.forEach(dish => {
            total += (dish.price * dish.quantity);
            this.restaurantSelected = dish.restaurant.name;
            this.restaurantId = dish.restaurant.id;
        });
        return total.toFixed(2);
    },
  },
  mounted(){
      console.log('console ok mounted payment')
      if (localStorage.cart) {
        this.cart = JSON.parse(localStorage.cart);

        window.axios.get('http://127.0.0.1:8000/api/user/' + this.cart[0].restaurant_id)
        .then(({data, status}) => {
          if(status===200 && data.success){
            // console.log('result', data.results.email)
            this.userEmail = data.results.email
          }
        })
        .catch(e => console.log(e));
        // console.log('cart', this.cart[0])
      }else{
        this.cart = []
      }
  }
}
</script>

<style scoped lang='scss'>
@import 'resources/sass/variables';

  h1{
    margin: 2rem 2rem 0;
    color: $primary-color;
  }
.header{
   background: $dark-color;
    .container{
        color: $brand-color;
        height: 70px;
        max-width: 1400px;
        margin-inline: auto;
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 1rem;
        .logo{
            cursor: pointer;
            text-decoration: underline;
            color: $brand-color;
            display: flex;
            gap: 0.1rem;
            img{
                width: 100%;
            }
            p{
                font-size: 2.2rem;
                margin-top: 0.4rem;
                font-family: 'Josefin Sans', sans-serif;
            }
        }
        nav{
            display: flex;
            align-items: center;
            a{
                padding: 0.375rem 0.75rem;
                color: $brand-color;
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
                &:hover{
                  text-decoration: none;
                  background: $brand-color;
                  border: $brand-color;
                  color: $dark_color;
                }
            }   
        }
    }
    .wave{
      width: 100%;
      height: 20px;
      color: #f8fafc;
    }
}
#payment{
  color: $dark-color;
  margin-top: 1rem;
  width: min(80%, 1400px);
  margin-inline: auto;
  display: flex;
  gap: 3rem;
  .left-payment{
    flex-basis: 70%;
    margin-bottom: 2rem;

    .form{
      margin-top: 2rem;
      &>p{
        font-size: 1.3rem;
        color: $primary-color;
      }
      padding: 1rem;
      border: 2px solid $primary-color;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
      .form-btn{
        color: #fff;
        background-color: $primary-color;
        border-color: $primary-color;
        &:hover{
          background-color: $secondary-color;
          border-color: $secondary-color;
        }
      }
    }
    // .payment-part{
    //   &>p{
    //     font-size: 1rem;
    //   }
    //   .dati-forniti{
    //     width: 15rem;
    //     margin-inline: auto;
    //     // text-align: center;
    //     padding: 1rem;
    //     border: 2px solid $primary-color;
    //     border-radius: 5px;
    //     box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
    //     p:last-child{
    //       margin-bottom: 0;
    //     }
    //   }
    // }
  }
  .right-payment{
    color: $primary-color;
    margin-top: 2rem;
    h2{
      font-size: 1.5rem;
    }
    // margin-inline-end: 0;
    .cart-summary{
      margin-bottom: 2rem;
      min-width: 18rem;
      padding: 1rem;
      border: 2px solid $primary-color;
      height: fit-content;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
      .cart{
        font-size: 0.9rem;
        padding: 0.5rem 0 1rem;
        border-bottom: 1px solid lightgrey;
        .cart-card{
          color: $dark-color;
          display: flex;
          justify-content: space-between;
          gap: 1rem;
        }
        }
        .totale{
          margin-top: 1rem;
          // font-weight: bold;
          text-align: end;
          font-size: 1.1rem;
          display: flex;
          justify-content: space-between;
          gap: 1rem;
          p{
            margin: 0;
          }
      }
    }
    .data-summary{
      min-width: 18rem;
      margin-bottom: 2rem;
      padding: 1rem;
      border: 2px solid $primary-color;
      height: fit-content;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
      p{
        color: $dark-color;
      }
      p:last-child{
        margin-bottom: 0;
      }
    }
  }
}

@media screen and (max-width: 900px) {
  #payment {
    flex-direction: column;
    gap: 0;
    .left-payment{
      order: 1;
      // margin-bottom: 2rem;
    }
    .right-payment {
      align-self: center;
      display: flex;
      gap: 1rem;
      // max-width: 18rem;
      margin-top: 1rem;
      order: 0;
      .cart-summary {
        margin-bottom: 0;
      }
      .data-summary {
        margin-bottom: 0;
      }
    }
  }  
}

@media screen and (max-width: 650px) {
  .right-payment{
    flex-direction: column;
  }
}
</style>