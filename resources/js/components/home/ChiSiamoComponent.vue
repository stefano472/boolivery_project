<template>
    <div class="container-section">
        <div class="container-chi-siamo">
            <div class="img-container">
                <img src="img/img rest/chi-siamo.png" alt="">
            </div>
            <div class="description-container">
                <h1>BOOLIVERY</h1>
                <H2>CHI SIAMO</H2>
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
        width: 100vw;
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
                    width: 500px;
                    border-radius: 10px;
                }
            }

            .description-container{
                flex: 50%;
                padding: 0px 50;

                h1{
                    color: $white-color;
                    font-size: 46px;
                }
                h2{
                    color: $secondary-color;
                    font-size: 22px;
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

@media (max-width: 800px) {
  .container-section{
    width: 100vw;
    flex-direction: column;
  }
}
</style>
