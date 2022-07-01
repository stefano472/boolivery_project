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
                    <div class="number-cart">
                        <span>{{cart.length}}</span>
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

                                <p>{{item.name}}</p>

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

        }
    },

    props:{
        cart: Array,
    },

    methods: {
        openModal(){
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
                &.sp-show {
                    pointer-events: auto;
                    opacity: 1;
                }
                .sp-modal {
                    background: white;
                    padding: 2rem;
                    border-radius: 0.5rem;
                    width: min(400px, 100%);
                    box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
                    // text-align: center;
                    position: relative;
                    .title{
                        display: flex;
                        align-items: center;
                        gap: 1rem;
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
}
</style>