<template>
    <div class="container-hero">

        <div class="info-resturant">
            <h1>{{restaurant.name}}</h1>
            <h2>{{restaurant.motto}}</h2>
            <!-- <h3>{{restaurant.name}}</h3> -->
            <!-- <button class="btn-go">Vai al ristorante</button> -->
        </div>
    </div>

</template>

<script>



export default {
    name: 'HeroComponent',

    props:{
    restaurant: Object,
  }

}

</script>

<style lang="scss" scoped>

    @import 'resources/sass/variables';


    .container-hero{
        display: flex;
        justify-content: center;
        background-image: url("/img/img_rest/jakub-kapusnak-4f4YZfDMLeU-unsplash-1024x683.jpeg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;

        .info-resturant{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: $secondary-color;
            opacity: 0.90;
            padding: 50px 150px;
            margin: 100px 0;
            color: $dark-color;
        }

        h1{
            color: $dark-color;
            font-size: 46px;
                }
        h2{
            font-size: 22px;
        }
        p{
            color: $dark-color;
            line-height: 3rem;
            font-size: 16px;
            padding-top: 20px
        }

        .btn-go{
            width: max-content;
            padding: 5px;
            background-color: transparent;
            cursor: pointer;
            margin: 20px 0;
        }
    }

    @media (max-width: 800px) {
        .info-resturant{
            width: 100%;
            flex-direction: column;
        }
}

</style>
