<template>
  <div id="ms-container">
    <section class="category">
        <div>
            <h2 class="title-categ">
                Le categorie piu' richieste
            </h2>
        </div>
        <div class="row1 mt-5 mb-3" >


            <!-- <a href="http://127.0.0.1:8000/restaurants/" v-for="(category, index) in categories.slice(0, 4)" :key="index" class="categories-cards">
                <img @click="emitCategory(category.id)" class="single-cat" :src="category.img" alt="">
                <p>{{ category.name }}</p>
            </a> -->
            <router-link :to="{name: 'restaurants'}" v-for="(category, index) in categories.slice(0, 4)" :key="index" class="categories-cards">
                <img @click="emitCategory(category.id)" class="single-cat" :src="category.img" alt="">
                <p @click="emitCategory(category.id)">{{ category.name }}</p>
            </router-link>


        </div>

        <div class="row1" >

            <!-- <a @click="emitCategory(category.id)" href="http://127.0.0.1:8000/restaurants/" v-for="(category, index) in categories.slice(4, 8)" :key="index" class="categories-cards">
                <img class="single-cat" :src="category.img" alt="">
                <p>{{ category.name }}</p>
            </a> -->
            <router-link :to="{name: 'restaurants'}" v-for="(category, index) in categories.slice(4, 8)" :key="index" class="categories-cards">
                <img @click="emitCategory(category.id)" class="single-cat" :src="category.img" alt="">
                <p @click="emitCategory(category.id)">{{ category.name }}</p>
            </router-link>
        </div>

    </section>
  </div>
</template>

<script>
export default {
    name: 'CategoriePiuRichiesteComponent',

    data(){
        return {
            categories: [],
        }
    },

    mounted(){

         window.axios.get('http://127.0.0.1:8000/api/categories').then(({status, data})=> {

            if (status === 200 && data.success) {
                this.categories = data.results
            }
        }).catch(e => console.log(e));

    },

    methods:{


        emitCategory(idCategory) {
        this.$emit("categorySelected", idCategory);
        },

        setUrlCategoryCover(cover){

            const url = cover;

            return url;

        }
   },
}
</script>

<style lang="scss" scoped>
@import 'resources/sass/variables';

#ms-container{
    margin-inline: auto;
    width: 80%;
    max-width: 1400px;
    .category{
        padding: 30px 0 50px;
    }
    .title-categ{
        text-transform: uppercase;
        text-align: center;
        font-size: 1.7rem;
        margin: 20px 0;
    }
    .row1{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2.5rem;

        .categories-cards{
            position: relative;

           p {
                opacity: 0;
                font-size: 1.5rem;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-weight: 800;
                color: white;
                }
                &:hover {
                cursor: pointer;
                p {
                    opacity: 1;
                }
                img {
                    filter: opacity(0.6);
                }
            }
        }
    }
    .single-cat{
        width: 10rem;
        //height: 150px;
        padding-right: 5px;

    }
    // .pad-1{
    //     margin: 0 0 40px;
    // }
    // .pad-2{
    //     margin: 10px 0 30px;
    // }
    // .pad-3{
    //     margin: 20px 0 20px;
    // }
    // .pad-4{
    //     margin: 30px 0 10px;
    // }
}
@media screen and (max-width: 966px) {
    #ms-container{
    .category{
        .row1{
            // display: flex;
            // flex-wrap: wrap;
            // justify-content: center;
            // gap: 2.5rem;
            .categories-cards:last-child {
                display: none;
            }
        }
        // .single-cat{
            // width: 20rem;
            // height: 20rem;
            // padding-right: 5px;
        // }
    }
}
}
@media screen and (max-width: 720px) {
    #ms-container{
    .category{
        .row1{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2.5rem;
            .categories-cards:last-child {
                display: block;
            }
        }
        // .single-cat{
            // width: 20rem;
            // height: 20rem;
            // padding-right: 5px;
        // }
    }
}
}
@media screen and (max-width: 480px) {
    #ms-container{
    .category{
        .row1{
            &:last-child{
                display: none;
            }
            .categories-cards:last-child {
                display: block;
            }
        }
    }
}
}

</style>
