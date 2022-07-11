<template>
  <div id="paybox" v-if="tokenGenerate" class="payment-box">
    <!-- <p v-if="loaded">Inserisci i dati del pagamento</p> -->
    <v-braintree class="brain" 
        :authorization="Token"
        locale='it_IT'
        @success="onSuccess"
        @error="onError"
        @load="onLoad"
    > 
      <template #button="slotProps">
        <button ref="paymentBtnRef" @click="slotProps.submit" style="display:none"></button>
        <div class="d-flex mt-3 mb-2">
          <button v-if="loaded" class="btnPay btn" @click="beforeBuy()">Procedi con l'acquisto 🎉</button>
          <button v-if="loaded" class="btnPay btn" @click="changeData()">Modifica i tuoi dati</button>
        </div>
      </template>
    </v-braintree>
        <!-- <div class="checkout">
        <div class="total-price">
            Totale: &euro; {{checkoutPrice()}}
            
            <router-link v-if="checkoutPrice()>0" class="btn checkout-btn" :to="{name: 'payment'}">Checkout</router-link>
        
            <button v-else class="btn checkout-btn">Checkout</button>
        </div>

                                .checkout-btn{
        color: #fff;
        background-color: $secondary-color;
        border-color: $secondary-color;
        &:hover{
        background-color: $primary-color;
        border-color: $primary-color;
        }
    }
     -->
  </div>
  <div v-else class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</template>

<script>
export default {
  name:"Paybox",
  data(){
    return{
      Token: null,
      tokenGenerate: false,
      loaded: false,
    }
  },
  props:{
    // user: Object,
    // tot: Number,
    formData: Object,
    cart: Array,
  },
  created(){
  axios
      .get('http://127.0.0.1:8000/api/orders/generate')
      .then((response) => {
        this.Token = response.data.token;
        console.log(response.data,'genera token');
          this.tokenGenerate = true;

      })
      .catch(e => console.log(e));
  },
  methods: {
    changeData(){
      this.$emit("changeData");
    },
    beforeBuy(){
      this.$refs.paymentBtnRef.click()
    },
    checkoutPrice(){
        let total = 0;
        this.cart.forEach(dish => {
            total += (dish.price * dish.quantity)              
        });
        return total.toFixed(2);
    },
    onLoad(){
      this.loaded = true
    },
    onSuccess (payload) {
      let nonce = payload.nonce;
      console.log(nonce)
      window.axios.post("http://127.0.0.1:8000/api/orders/make/payment", {}, {
            params: {
              'token': nonce,
              'amount': this.checkoutPrice(),  
            }
          })
        .then((response) => {
          // console.log('nonce', nonce)
          console.log(response, 'response dopo pagamento');
          if(response.data.success){
            // console.log(this.formData)
            this.sendOrder()
          }
        })
        .catch( e => console.log(e));
    },
    onError (error) {
      let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
      console.log(message,'errore di mess in paybox');
    },
    sendOrder(){
      // window.axios.post('http://127.0.0.1:8000/api/payment')
      window.axios.post('http://127.0.0.1:8000/api/payment', {
          'total': this.formData.total, 
          'customer_address': this.formData.address, 
          'customer_name': this.formData.name, 
          'customer_surname': this.formData.surname, 
          'customer_phone': this.formData.phone, 
          'special_request': this.formData.special_request, 
          'payment_approval': this.formData.status, 
          'restaurant_id': this.formData.restaurant_id,
          'customer_email': this.formData.email,
          'restaurant_email': this.formData.restaurant_email,
          'plates': this.formData.plates,
        }).then((response) => {
          // handle success
              console.log('chiamata axios post per payment');
              console.log(response,'response axios');
              // alert(response)
              if(response.status === 200){
                localStorage.clear();
                this.$router.push({
                  name: 'success'
                })
              }
          }).catch( e => console.log('error payment', e));;
    },
  }
}
</script>

<style lang="scss" scoped>
@import 'resources/sass/variables';

.spinner-border{
  color: $primary-color !important;
  height: 4rem !important;
  width: 4rem !important;
  margin-top: 11rem;
}
#paybox{
  margin: 0 1rem;
  p{
    color: $primary-color;
    font-size: 1.2rem;
    margin: 0 0 -1rem;
  }
  .brain{
    margin-inline: auto;
  	.d-flex {
      justify-content: space-around;
      gap: 1rem;
    }
    .btnPay{
        color: #fff;
        background-color: $primary-color;
        border-color: $primary-color;
        &:hover{
          background-color: $secondary-color;
          border-color: $secondary-color;
        }
    }
  }
}

@media screen and (max-width: 900px) {
  .spinner-border{
    margin-top: 6rem;
  }
}
</style>