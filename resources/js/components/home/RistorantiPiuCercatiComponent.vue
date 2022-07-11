<template>
  <div class="out-container">
    <div id="sm-container">
      <section class="most-want" v-scrollAnimation>
        <div class="main-titles">
          <h2>I ristoranti consigliati da noi</h2>
          <h5>Inizia a dare un occhio</h5>
        </div>
        <div class="restaurants">
          <div
            class="block"
            v-for="(restaurant, index) in restaurants.slice(0, 3)"
            :key="index"
          >
            <div class="add-padd">
              <div
                class="bg-img"
                :style="`background-image: url(${'/storage/' + restaurant.cover})`"
              ></div>
            </div>

            <div class="box-info">
              <h6 class="name-restaurant">{{ restaurant.name }}</h6>
              <p><span v-for="(category, index) in restaurant.categories" :key="index" >{{category.name}} </span></p>
              <p class="description">{{ restaurant.motto }}</p>
              <!-- <p class="tipology">Tipologia ristorante</p> -->
              <router-link class="btn btn-restaurant"
                :to="{ name: 'restaurant', params: { ...restaurant } }"
                >Vai al ristorante</router-link
              >
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: "RistorantiPiuCercatiComponent",

  props: {
    restaurants: Array,
  },
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";
.out-container {
  background-color: $brand-color;
  font-family: "Epilogue", sans-serif;
}
#sm-container {
  margin-inline: auto;
  width: 80%;
  max-width: 1400px;
  .most-want {
    width: 100%;
    min-height: 500px;
    padding-bottom: 20px;
  }
  .main-titles {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 70px 0 20px;
    h2 {
      font-size: 2.5rem;
    }
    h5 {
      font-size: 1.8rem;
    }
  }
  .block {
    display: flex;
    justify-content: center;
    column-gap: 5px;
    margin-bottom: 20px;
  }
  .add-padd {
    padding: 30px;
    width: 100%;
    height: 250px;
  }
  .bg-img {
    width: 100%;
    height: 100%;
    // background-image: url(https://images.wallpaperscraft.com/image/single/restaurant_table_interior_modern_style_39288_1920x1080.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position-y: center;
    border-radius: 5px;
  }
  .box-info {
    width: 35%;
    height: 200px;
    display: flex;
    flex-direction: column;
    line-height: 1rem;
    justify-content: center;
    align-items: center;
    padding-top: 50px;
    padding-left: 1rem;
    .btn-restaurant{
      color: $white-color;
      background: $primary-color;
      border: $primary-color;
      transition: 0.2s;
      &:hover{
        color: $primary-color;
        background: $white-color;
        border: $white-color;

      }
    }
    h6 {
      font-size: 1.8rem;
      text-align: center;
    }
    p {
      font-size: 1rem;
    }
  }
  .name-restaurant {
    text-transform: uppercase;
    font-size: 1.2rem;
    color: $primary-color;
  }
  .description {

    // color: gray;
    font-size: 0.7rem;
    text-align: center;
  }
  .tipology {
    font-size: 0.7rem;
    font-weight: 700;
  }
  .btn-go {
    width: max-content;
    padding: 5px;
    background-color: transparent;
    cursor: pointer;
  }
}

@media screen and (max-width: 992px) {
  .out-container {
    margin-inline: auto;
    max-width: 992px;
    #sm-container {
      .most-want {
        width: 100%;
        min-height: 500px;
        padding-bottom: 20px;
      }
      .main-titles {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0;
        h2 {
          font-size: 2.2rem;
        }
        h5 {
          font-size: 1.6rem;
        }
      }
    }
  }
}

@media screen and (max-width: 768px) {
  .out-container {
    margin-inline: auto;
    max-width: 768px;
    #sm-container {
      .most-want {
        width: 100%;
        min-height: 500px;
        padding-bottom: 20px;
      }
      .main-titles {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0;
        h2 {
          font-size: 2rem;
        }
        h5 {
          font-size: 1.5rem;
        }
      }
    }
  }
}

@media screen and (max-width: 576px) {
  .out-container {
    margin-inline: auto;
    max-width: 576px;
    #sm-container {
      .most-want {
        width: 100%;
        min-height: 500px;
        padding-bottom: 20px;
      }
      .main-titles {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0;
        h2 {
          font-size: 1.8rem;
          text-align: center;
        }
        h5 {
          font-size: 1.4rem;
        }
      }
      .block {
        flex-direction: column;
      }
      .add-padd {
        padding: 10px;
        height: 250px;
        .bg-img {
          width: 100%;
          height: 100%;
        }
      }
      .box-info {
        flex-direction: column;
        width: 100%;
        height: auto;
        padding: 0;
        text-align: center;
        justify-content: start;
        padding-top: 20px;
      }
    }
  }
}
</style>
