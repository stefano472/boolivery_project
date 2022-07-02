<template>
  <div id="header">
    <div class="container">
        <a class="logo" href="/">
            <img src="/logo.svg" alt="logo">
            <p>oolivery</p>
        </a>
        <nav>
            <ul> 
                <li>
                    <a href="/restaurants">Ristoranti</a>
                </li>
                <li>
                    <a href="">Collabora con noi</a>
                </li>
                <li>
                    <a href="">About us</a>
                </li>
                <li>
                    <a href="">Contatti</a>
                </li>
            </ul>
        </nav>
        <div class="cart-login">
            <div>
                <a href="/login">accedi</a>
            </div>
            <div>
                <i @click="openModal" class="cart fa-solid fa-cart-shopping">
                    <div v-if="totalQuantity()>0" class="number-cart">
                        <span>{{totalQuantity()}}</span>
                    </div>
                </i>
                
                <div id="modal-container" :class="activeModal ? 'sp-show' : ''">
                    <div class="sp-modal">
                        <i @click="closeModal" class="close-modal fa-solid fa-xmark"></i>
                        <!-- <button id='closeModal' @click="closeModal" type="button">X</button> -->
                        <div class="title">
                            <h2>Your Cart</h2>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                        <div class="cart">
                            <div v-for="(item, index) in cart" :key="index">
                                <div class="dish-cart">
                                    <div class="dish-img">
                                        <img :src="item.cover" alt="">
                                    </div>
                                    <div class="definition">
                                        <h5>{{item.name}}</h5>
                                        <div class="dish-specs">
                                            <p class="quantity">
                                                <i @click="reduceQuantity(item, index)" class="fa-solid fa-minus"></i>
                                                <span>
                                                    {{item.quantity}}
                                                </span>
                                                <i @click="addQuantity(item)" class="fa-solid fa-plus"></i>
                                            </p>
                                            <p>&euro; {{totalPrice(item)}}</p>
                                            <i @click="removeItem(index)" class="remove fa-solid fa-trash-can"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="checkout">
                            <div class="total-price">
                                Totale: &euro; {{checkoutPrice()}}
                                <button class="btn">checkout</button>
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
    name: 'HeaderComponent',
    data() {
        return {
            activeModal: false,
            // checkoutPrice: 0,
        }
    },

    props:{
        cart: Array,
    },

    methods: {
        removeItem(index){

            this.cart.splice(index, 1)
            console.log(this.cart)
            // const items = JSON.parse(localStorage.getItem('cart'));
    
            // items.splice(index)
            // console.log(items);
            // const cart = JSON.stringify(items)
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },
        reduceQuantity(dish, index){
            dish.quantity -= 1;
            if (dish.quantity < 1) {
                this.removeItem(index)
            }
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },
        addQuantity(dish){
            dish.quantity += 1;
            localStorage.setItem('cart', JSON.stringify(this.cart));
        },
        totalQuantity(){
            let quantity = 0;
            this.cart.forEach(dish => {
                quantity += dish.quantity;
            });
            return quantity;
        },
        totalPrice(dish){
            const total = dish.price * dish.quantity;
            // this.checkoutPrice += total;
            return total.toFixed(2);
        },
        checkoutPrice(){
            let total = 0;
            this.cart.forEach(dish => {
                total += (dish.price * dish.quantity)              
            });
            return total.toFixed(2);
        },
        openModal(){
            // console.log('cart', this.cart)
            // for (let i = 0; i<this.cart.length; i++){
            //     if (this.cart.includes(this.cart[i])){
            //         this.quantity += 1 
            //     }
            // }
            this.activeModal = true
        },
        closeModal(){
            this.activeModal = false
        },

    },

    // computed: {
    //     cart(){

    //         console.log(localStorage.cart);
    //         return JSON.parse(localStorage.cart);
    //     }
    // }
}
</script>

<style scoped lang="scss">
@import 'resources/sass/variables';

#header{
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
            ul{
                display: flex;
                gap: 1.5rem;
                li{
                    a{
                        color: $brand-color;
                        cursor: pointer;
                        &:hover{
                            color: $white_color;
                        }
                    }
                }
            }
        }
        .cart-login{
            display: flex;
            align-items: center;
            gap: 1rem;
            a{
                color: $brand-color;
                cursor: pointer;  
                &:hover{
                    color: $white_color;
                }
            }
            i.cart{
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
                &:hover{
                    transform: scale(1.1);
                    color: $white-color;
                    background: $primary-color;
                }
                .number-cart{
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
                    border-bottom: 1px solid gray;
                    border-radius: 10px;
                    padding: 0.5rem;
                    gap: 1rem;
                    .dish-img{
                        width: 20%;
                        img{
                            width: 100%;
                            border-radius: 10px;
                        }
                    }
                    .definition{
                        width: 100%;
                        .dish-specs{
                            margin-top: 0.5rem;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            .quantity{
                                display: flex;
                                gap: 0.4rem;
                                i{
                                    cursor: pointer;
                                    width: 1rem;
                                    height: 1rem;
                                    padding: 0.6rem;
                                    border-radius: 5px;
                                    background: lightgray;
                                    display: grid;
                                    place-content: center;
                                }
                            }
                            .remove:hover{
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
                    .checkout{
                        flex-grow: 1;
                        display: flex;
                        justify-content: end;
                        align-items: end;
                    }
                    .total-price{
                        font-size: 1.2rem;
                        display: flex;
                        flex-direction: column;
                        button{
                            color: #212529;
                            background-color: $brand-color;
                            border-color: $brand-color;
                            &:hover{
                                color: #212529;
                                background-color: $secondary-color;
                                border-color: $secondary-color;
                            }
                        }
                        }
                    }
                    .title{
                        display: flex;
                        align-items: center;
                        gap: 1rem;
                        margin-bottom: 1.5rem;
                        i{
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
                        background: $brand-color;
                        /* display: flex; */
                        /* justify-content: center; */
                        /* align-items: center; */
                        display: grid;
                        place-content: center;
                        cursor: pointer;
                        &:hover{
                            background: $secondary-color;
                        }
                    }
                }
            }
        }
    }

</style>