<template>
  <div id="ms-container">
    <section class="category">
        <div>
            <h2 class="title-categ">
                Le categorie piu' richieste
            </h2>
        </div>
        <div class="row1 mt-5 mb-3" >


            <a href="http://127.0.0.1:8000/restaurants/" v-for="(category, index) in categories.slice(0, 4)" :key="index" class="categories-cards">
                <img class="single-cat" :src="category.img" alt="">
                <p>{{ category.name }}</p>
            </a>


        </div>

        <div class="row1" >

            <a href="http://127.0.0.1:8000/restaurants/" v-for="(category, index) in categories.slice(4, 8)" :key="index" class="categories-cards">
                <img class="single-cat" :src="category.img" alt="">
                <p>{{ category.name }}</p>
            </a>

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




      setUrlFilters(index){

        const url = 'http://127.0.0.1:8000/restaurants/' + index;

        return url;

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
        padding: 30px 0 30px;
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
                    filter: opacity(0.5);
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
@media screen and (min-width: 663px) and (max-width: 899px) {
    #ms-container{
    .category{
        .row1{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2.5rem;
        }
        .single-cat{
            width: 20rem;
            height: 20rem;
            padding-right: 5px;
        }
    }
}
}

</style>
