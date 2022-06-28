<template>
  <div id="ms-container">
    <section class="category">
        <div>
            <h2 class="title-categ">
                Le categorie piu' richieste
            </h2>
        </div>
        <div class="row1 mt-5">
            <img class="single-cat pad-1" src="/img/category_img/cat_veg.jpeg" alt="">
            <img class="single-cat pad-2" src="/img/category_img/cat_mex.png" alt="">
            <img class="single-cat pad-3" src="/img/category_img/cat_fast.png" alt="">
            <img class="single-cat pad-4" src="/img/category_img/cat_piz.png" alt="">
        </div>
        <div class="row1">
            <img class="single-cat pad-1" src="/img/category_img/cat_dol.png" alt="">
            <img class="single-cat pad-2" src="/img/category_img/cat_jap.png" alt="">
            <img class="single-cat pad-3" src="/img/category_img/cat_chi.png" alt="">
            <img class="single-cat pad-4" src="/img/category_img/cat_ita.png" alt="">
        </div>

    </section>
  </div>
</template>

<script>
export default {
    name: 'CategoriePiuRichiesteComponent'

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
        justify-content: center;
        gap: 2.5rem;
    }
    .single-cat{
        width: 150px;
        height: 150px;
        padding-right: 5px;

    }
    .pad-1{
        margin: 0 0 40px;
    }
    .pad-2{
        margin: 10px 0 30px;
    }
    .pad-3{
        margin: 20px 0 20px;
    }
    .pad-4{
        margin: 30px 0 10px;
    }
}

</style>
