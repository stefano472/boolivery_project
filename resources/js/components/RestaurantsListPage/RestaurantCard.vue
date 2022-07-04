<template>
   <div class="restaurant-list">
     <div v-for="(restaurant, index) in restaurants" :key="index" class="restaurant-card">

        <div class="foto" v-if="restaurant.cover">
            <img :src="'/storage/' + restaurant.cover" alt="Cover Ristorante" />
        </div>
        
        <div class="name-description">

            <h1>{{restaurant.name}}</h1>

            <p><strong>{{restaurant.category_name}}</strong></p>

            <p>{{restaurant.motto}}</p>

        </div>
        
        <div class="show-restaurant">
            <router-link :to="{name:'restaurant', params: {...restaurant}}">Vai al Ristorante</router-link>
        </div>
        
    </div>
  </div>
</template>

<script>
export default {
name: 'RestaurantCard',

props:{
    restaurants: Array, 
}, 
mounted(){
    console.log('restaurant card', this.restaurants)
}
}
</script>

<style lang="scss" scoped>

    .restaurant-list{
        max-height: 500px;
        overflow-y: auto;
        .restaurant-card{
        display: flex;
        justify-content: space-between;
        padding: 30px 20px;
        border-bottom: 1px solid gray;
        border-radius: 20px;
        margin: 31px 0;

        //foto del piatto
        .foto{
            width: 250px;
            img{
                width: 100%;
                border-radius: 20px;
                min-width: 146px;
            }
        }

        // nome e descrizione del piatto
        .name-description{
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 20px;
            .dish-name{
                h2{
                    color: #1e282f;
                }
            }
            .dish-description{
                p{
                    color: #8c9e9e;
                }
            }
        }

        .show-restaurant {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            .price-dish{
                font-size: 25px;
            }
        }
    }
    }
    

     @media screen and (max-width: 484px){

        .restaurant-list{
            .restaurant-card{
                flex-wrap: wrap;
                //foto del piatto
                .foto{
                    width: 100%;
                    margin-bottom: 17px;
                    img{
                        width: 100%;
                        border-radius: 20px;
                    }
                }

                // nome e descrizione del piatto
                .name-description{
                    width: 100%;
                    text-align: center;
                }

                .show-restaurant {
                    align-items: center;
                    
                    
                }
            }
        }
     
        
 }

    img{
        width: 150px;
    }
</style>