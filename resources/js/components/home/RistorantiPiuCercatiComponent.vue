<template>
<div class="out-container">

    <div id="sm-container">
        <section class="most-want">
            <div class="main-titles">
                <h2>I ristoranti piu' cercati</h2>
                <h5>Selezionati proprio da voi</h5>
            </div>
            <div class="restaurants">
                <div class="block" v-for="(restaurant, index) in restaurants.slice(0,3)" :key="index">
                    <div class="add-padd">
                        <div class="bg-img"></div>
                    </div>

                    <div class="box-info" >
                        <h6 class="name-restaurant">{{restaurant.name}}</h6>
                        <p class="description">{{restaurant.motto}}</p>
                        <!-- <p class="tipology">Tipologia ristorante</p> -->
                        <router-link :to="{name: 'restaurant', params: {...restaurant}}">Vai al ristorante</router-link> 
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>
</template>

<script>
export default {
    name: 'RistorantiPiuCercatiComponent',

    props:{
        restaurants: Array,
    }

}
</script>

<style lang="scss" scoped>
@import 'resources/sass/variables';
.out-container{
    background-color: $brand-color;

}
#sm-container{
    margin-inline: auto;
    width: 80%;
    max-width: 1400px;
        .most-want{
        width: 100%;
        min-height: 500px;
        padding-bottom: 20px;
        }
        .main-titles{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0;
        }
        .block{
            display: flex;
            justify-content: center;
            column-gap: 5px;
            margin-bottom: 20px;
        }
        .add-padd{
            padding: 30px;
            width: 35%;
            height: 250px;
        }
        .bg-img{
            width: 100%;
            height: 100%;
            background-image: url(https://images.wallpaperscraft.com/image/single/restaurant_table_interior_modern_style_39288_1920x1080.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: center;
            border-radius: 5px;
        }
        .box-info{
            width: 35%;
            height: 200px;
            display: flex;
            flex-direction: column;
            line-height: 1rem;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
            padding-left: 1rem;
        }
        .name-restaurant{
            text-transform: uppercase;
            font-size: 1.2rem;
        }
        .description{
            color: gray;
            font-size: 0.7rem;
        }
        .tipology{
            font-size: 0.7rem;
            font-weight: 700;

        }
        .btn-go{
            width: max-content;
            padding: 5px;
            background-color: transparent;
            cursor: pointer;
        }
}

</style>
