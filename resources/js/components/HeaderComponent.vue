<template>
  <div id="header">
    <div class="container">
        <a class="logo" href="#">
            <img src="logo.svg" alt="logo">
            <p>oolivery</p>
        </a>
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
                <a href="/login">accedi</a>
            </div>
            <div>
                <i class="fa-solid fa-cart-shopping"></i>
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
            i{
                font-size: 1.2rem;
                cursor: pointer;
                height: 1.5rem;
                width: 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
                border-radius: 50%;
                transition: 0.2s;
                &:hover{
                    transform: scale(1.1);
                    color: $white-color;
                    background: $primary-color;
                }
            }
        }
    }
}
</style>