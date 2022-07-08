<template>
  <div id="success-payment">

    <div class="header">
      <div class="container">
        <a class="logo" href="/">
            <img src="/logo.svg" alt="logo">
            <p>oolivery</p>
        </a>
        <nav>
            <ul>
                <li>
                    <a href="/">Torna al Sito</a>
                </li>
            </ul>
        </nav>
      </div>
      <!-- <svg class="wave">
        <use xlink:href='img/wave.svg#wave-1hkxOo'></use>
      </svg> -->
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8fafc" fill-opacity="1" d="M0,224L60,218.7C120,213,240,203,360,181.3C480,160,600,128,720,144C840,160,960,224,1080,218.7C1200,213,1320,139,1380,101.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->
      <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="#ffffff" d="M0,0L80,8.3C160,17,320,33,480,38.3C640,43,800,37,960,28.3C1120,20,1280,10,1440,20C1600,30,1760,60,1920,65C2080,70,2240,50,2400,36.7C2560,23,2720,17,2880,20C3040,23,3200,37,3360,45C3520,53,3680,57,3840,58.3C4000,60,4160,60,4320,53.3C4480,47,4640,33,4800,36.7C4960,40,5120,60,5280,63.3C5440,67,5600,53,5760,50C5920,47,6080,53,6240,60C6400,67,6560,73,6720,71.7C6880,70,7040,60,7200,55C7360,50,7520,50,7680,41.7C7840,33,8000,17,8160,21.7C8320,27,8480,53,8640,68.3C8800,83,8960,87,9120,76.7C9280,67,9440,43,9600,28.3C9760,13,9920,7,10080,16.7C10240,27,10400,53,10560,68.3C10720,83,10880,87,11040,83.3C11200,80,11360,70,11440,65L11520,60L11520,100L11440,100C11360,100,11200,100,11040,100C10880,100,10720,100,10560,100C10400,100,10240,100,10080,100C9920,100,9760,100,9600,100C9440,100,9280,100,9120,100C8960,100,8800,100,8640,100C8480,100,8320,100,8160,100C8000,100,7840,100,7680,100C7520,100,7360,100,7200,100C7040,100,6880,100,6720,100C6560,100,6400,100,6240,100C6080,100,5920,100,5760,100C5600,100,5440,100,5280,100C5120,100,4960,100,4800,100C4640,100,4480,100,4320,100C4160,100,4000,100,3840,100C3680,100,3520,100,3360,100C3200,100,3040,100,2880,100C2720,100,2560,100,2400,100C2240,100,2080,100,1920,100C1760,100,1600,100,1440,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z"></path></svg>
    </div>

    <div class="thank-you">
        <div class="text-thanks">
            <div class="styling">
                <h1 class="">Grazie per averci scelto</h1>
                <h2 class="">Il tuo ordine sta arrivando!!</h2>
            </div>
        </div>
        <!-- <img src="https://img.freepik.com/free-vector/delivery-service-with-masks-concept_23-2148497067.jpg?w=2000&t=st=1657180383~exp=1657180983~hmac=41669774a73cf64eaa6bb0a4f3c2a642a881fd3cc87ad071819e8a9f7febfb5f" alt=""> -->
    </div>

  </div>
</template>

<script>
export default {
    name: 'ThankYou'
}
</script>

<style scoped lang='scss'>
@import 'resources/sass/variables';

#success-payment{
    h1 {
        height: auto;
        line-height: inherit;
    }
    background-color: white;
    .header{
        position: fixed;
        top: 0;
        width: 100%;
        background: $dark-color;
        .wave{
          width: 100%;
          height: 20px;
          color: white;
        }
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

        }
    }


    .thank-you{
        // margin-top: 1rem;
        text-align: center;
        background-image: url('/img/background-success.jpg');
        background-size: cover;
        background-position: top left;
        background-repeat: no-repeat;

        height: 100vh;
        .text-thanks{
            display: grid;
            place-content: center;
            /* padding-top: 25rem; */
            height: 100%;
            .styling{
                background: rgba($color: $primary-color, $alpha: 0.7);
                margin: 0 0.5rem;
                padding: 1rem;
                width: fit-content;
                // opacity: 0.;
                border-radius: 10px;
            }
            h1{
                font-size: 50px;
                color: $white-color;
            }
            h2{
                color: $dark-color;
            }
        }
    }

}
@media screen and (max-width: 600px) {
    #success-payment{
        .thank-you{
            background-position: top;

            .text-thanks{
                .styling{
                    h1 {
                        font-size: 30px;
                    }
                    h2{
                        font-size: 20px;
                    }
        
                }
            }
        }
    }
}
</style>
