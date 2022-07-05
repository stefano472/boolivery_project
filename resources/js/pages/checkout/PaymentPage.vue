<template>
  <div id="payment" class="">
    <div class="">
      Riepilogo ordine
      <div>{{checkoutPrice()}}</div>
      <div v-for="dish in cart" :key='dish.id'>
        {{dish.name}}
      </div>
    </div>
    <!-- {{tokenApi}} -->
    <Payment :cart="cart" />

    <button
      v-if="!disableBuyButton"
      class="text-center px-4 py-3"
      @click.prevent="beforeBuy"
    >
      Procedi con l'acquisto 🎉
    </button>
    <button
      v-else
      class="text-center px-4 py-3"
    >
      {{
        loadingPayment ? 'Loading...' : 'Procedi con l\'acquisto 🎉'
      }}
    </button>
  </div>
</template>

<script>
import Payment from './Payment.vue';

export default {
  name: 'PaymentPage',
  props: {
    cart:Array
  },
  components: {
    Payment
  },
//   data () {
//     return {
//       loading: true,
//       products: []
//     }
//   },
  data () {
    return {
      // tokenApi: '',
      disableBuyButton: true,
      loadingPayment: false,
      prodotto: [],
      form: {
        token: '',
        product: ''
      }
    }
  },
  // mounted () {
  //   const id = this.$route.params.id;
  //   console.log('cart', this.cart)

  //   console.log('mounted ok!', id)
  //   this.loading = true
  //   window.axios.get('http://127.0.0.1:8000/api/dishes')
  //     .then((response) =>{
  //       if (response.status === 200) {
  //         // console.log(this.$route.params.id)

  //         response.data.results.forEach(dish => {
  //           // console.log('piatti', id)
  //           if(dish.id == id){
  //             this.prodotto.push(dish)
  //             console.log(this.prodotto)
  //           }
  //         });
  //         // this.loading = false
  //       }
  //   }).catch((e) => console.log(e));
  // },
  // async asyncData ({ app }) {
  //   let tokenApi = null
  //   const response = await app.$axios.$get('http://127.0.0.1:8000/api/orders/generate')
  //   tokenApi = response.token
  //   return {
  //     tokenApi,
  //     loadingPayment: false
  //   }
  // },

  // mounted () {
  //   window.axios.get('http://127.0.0.1:8000/api/orders/generate')
  //     .then((response) =>{

  //         // console.log(response.data.token)
  //         this.tokenApi = response.data.token;

  //   }).catch((e) => console.log(e));
  //   // this.form.product = this.$route.params.id
  // },
  methods: {
        checkoutPrice(){
            let total = 0;
            this.cart.forEach(dish => {
                total += (dish.price * dish.quantity)              
            });
            return total.toFixed(2);
        },
    handleLoading () {
      this.disableBuyButton = false
    },
    paymentOnSuccess (nonce) {
      // alert(nonce);
      this.form.token = nonce
      this.buy()
    },
    // eslint-disable-next-line node/handle-callback-err
    paymentOnError (error) {
    },
    beforeBuy () {
      this.$refs.paymentRef.$refs.paymentBtnRef.click()
    },
    async buy () {
      this.disableBuyButton = true
      this.loadingPayment = true
      try {
        await this.$axios.$post('/api/orders/make/payment', { ...this.form })
        // const message = response.message
        // alert(message)
        this.$router.push({ path: '/checkout/thankyou' })
      } catch (error) {
        this.disableBuyButton = false
        this.loadingPayment = false
      }
    }
  }
}
</script>

<style scoped lang='scss'>
/* Sample `apply` at-rules with Tailwind CSS
.container {
@apply min-h-screen flex justify-center items-center text-center mx-auto;
}
*/
#payment{
  .pm-container {
    margin: 0 auto;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  .title {
    display: block;
    font-weight: 300;
    font-size: 100px;
    color: #35495e;
    letter-spacing: 1px;
  }
  .subtitle {
    font-weight: 300;
    font-size: 42px;
    color: #526488;
    word-spacing: 5px;
    padding-bottom: 15px;
  }
  .links {
    padding-top: 15px;
  }

}
</style>