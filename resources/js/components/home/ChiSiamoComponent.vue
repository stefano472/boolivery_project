<template>
    <div class="container-section">
        <div class="container-chi-siamo">
            <div class="img-container">
                <img src="img/img_rest/chi-siamo.png" alt="">
            </div>
            <div class="description-container">
                <h1>BOOLIVERY</h1>
                <h2>CHI SIAMO</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quidem eos. Consequatur, itaque assumenda aspernatur, ducimus asperiores doloribus et at consectetur error nulla nemo hic beatae dignissimos expedita exercitationem velit? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quibusdam incidunt nulla culpa veritatis laboriosam quidem obcaecati nam quod porro commodi recusandae ut quam voluptatum ad dicta officia assumenda eaque!
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ChiSiamoComponent',
}
</script>

<style lang="scss" scoped>
@import 'resources/sass/variables';

    .container-section{
        background-color: $primary-color;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 80px 0;

        .container-chi-siamo{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0 10%;

            .img-container{
                flex: 50%;
                padding: 0px 50;

                img{
                    width: 25rem;
                    border-radius: 10px;
                    padding-bottom: 20px;
                }
            }

            .description-container{
                flex: 50%;
                padding: 0px 50;

                h1{
                    color: $white-color;
                    font-size: 2.5rem;
                }
                h2{
                    color: $secondary-color;
                    font-size: 2rem;
                }
                p{
                    color: $dark-color;
                    line-height: 3rem;
                    font-size: 16px;
                    padding-top: 20px
                }

            }

        }
    }

@media (max-width: 1900px) {
  .container-section{
    width: 100%;
    flex-direction: column;
    .container-chi-siamo{
        .description-container{
            h1{
                font-size: 2.5rem;
            }
            h2{
                font-size: 2rem;
            }
        }
    }
  }
}

@media (max-width: 1400px) {
  .container-section{
    width: 100%;
    flex-direction: column;
        .container-chi-siamo{
        .description-container{
            h1{
                font-size: 2.2rem;
            }
            h2{
                font-size: 1.8rem;
            }
        }
    }
  }
}

@media (max-width: 992px) {
  .container-section{
    width: 100%;
    flex-direction: column;
        .container-chi-siamo{
        .description-container{
            h1{
                font-size: 2rem;
            }
            h2{
                font-size: 1.6rem;
            }
        }
    }
  }
}

@media (max-width: 768px) {
  .container-section{
    width: 100%;
    flex-direction: column;
        .container-chi-siamo{
        .description-container{
            h1{
                font-size: 1.8rem;
            }
            h2{
                font-size: 1.4rem;
            }
        }
    }
  }
}

@media (max-width: 576px) {
  .container-section{
    flex-direction: column;
        .container-chi-siamo{
            display: flex;
            flex-direction: column;
            .img-container{
                width: 20rem;
                padding: 0;
                padding-left: 45px;
                img{
                    width: 80%;
                }
            }
        .description-container{
            width: 80%;
            margin-inline: auto;
        }
    }
  }
}
</style>
