<template>

  <div>

    <!-- Card del piatto -->
    <div class="dish-card" v-for="(dish, index) in dishes" :key="index">
        
        <!-- foto del piatto -->
        <div class="foto" >
            <img :src="dish.cover" alt="Dish">
        </div>

        <!-- nome e descrizione del piatto -->
        <div class="name-description">

            <!-- name -->
            <div class="dish-name"> 
                <h2>{{dish.name}}</h2>
            </div>
            
            <!-- description -->
            <div class="dish-description"> 
                <p>{{dish.description}}</p>
            </div>
        </div>

        <!-- prezzo e aggiungi al carrello -->
        <div class="price add-to-cart">

            <!-- prezzo -->
            <div class="price-dish">
                <p>
                    &euro;{{dish.price}}
                </p>
            </div>

            <!-- pulsante di aggiunta al carrello -->
            <div class="add-to-cart-btn">
                <button class="btn btn-outline-info">
                    Add to cart
                </button>
            </div>
        </div>
    </div>

  </div>
</template>

<script>
export default {
    name: 'DishCard',

    props: {
        dishes: Array
    }

}
</script>

<style lang="scss" scoped>
    .dish-card{
        display: flex;
        justify-content: space-around;
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

        .price.add-to-cart {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            .price-dish{
                font-size: 25px;
            }
        }
    }

     @media screen and (max-width: 484px){

     .dish-card{
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

        .price.add-to-cart {
            align-items: center;
            
            
        }
    }
        
 }


 .btn-outline-info {
                background-color: transparent;
                color: #38A3A5;
                border-color: #38A3A5;
                &:hover{
                    color: white;
                    background-color: #38A3A5;
                    border-color: #38A3A5;
                }
}
</style>
