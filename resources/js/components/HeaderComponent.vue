<template>
  <div id="header">
    <div class="container">
        <div class="logo">
            <img src="logo.svg" alt="">
            <p>oolivery</p>
        </div>
        <nav>
            <ul> 
                <li>
                    <a href="">categorie</a>
                </li>
                <li>
                    <a href="">collabora con noi</a>
                </li>
                <li>
                    <a href="">about us</a>
                </li>
                <li>
                    <a href="">contatti</a>
                </li>
            </ul>
        </nav>
        <div class="cart-login">
            <div>
                <a href="">accedi</a>
            </div>
            <div>
                <button>cart</button>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'HeaderComponent',
}
</script>

<style scoped lang="scss">
@import 'resources/sass/variables';

#header{
    background: $dark-color;
    .container{
        color: $primary-color;
        height: 70px;
        max-width: 1400px;
        margin-inline: auto;
        display: flex;
        justify-content: space-between;
        padding: 0.5rem;
        .logo{
            display: flex;
            img{
                width: 100%;
            }
            p{
                font-size: 2rem;
                margin-top: 0.5rem;
            }
        }
        nav{
            display: flex;
            align-items: center;
            ul{
                display: flex;
                gap: 1rem;
                li{
                    a{
                        color: $primary-color;
                        cursor: pointer;
                    }
                }
            }
        }
        .cart-login{
            display: flex;
        }
    }
}
</style>