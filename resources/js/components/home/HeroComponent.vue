<template>
  <div id="hero">
    <div class="container2" v-scrollAnimation>
      <div class="sx-text">
        <div class="text">
          <div class="logo">
            <img src="logo.svg" alt="logo" />
            <p>oolivery</p>
          </div>
          <p class="lowercase">i ristoranti</p>
          <p class="uppercase">A UN CLICK</p>
        </div>
        <router-link class="link-router" :to="{ name: 'restaurants' }">
          <div class="search-bar ml-3">
            <button class="submit">
              <i class="fa-solid fa-rocket"></i>
            </button>
            <div class="input">Scopri i nostri ristoranti!</div>
            <!-- <input v-model="inputSearch" type="text" class="input" placeholder="Search..."> -->
          </div>
        </router-link>
      </div>
    </div>
    <svg class="wave">
      <use xlink:href="img/wave.svg#wave-1hkxOo"></use>
    </svg>
  </div>
</template>

<script>
export default {
  name: "HeroComponent",
};
</script>

<style scoped lang="scss">
@import "resources/sass/variables";

#hero {
  padding-top: 70px;
}
#hero {
  .before-enter{
    opacity: 0;
    transform: translatex(100px);
    transition: all 1s cubic-bezier(.24,-0.13,.42,1.45);
  }
  .enter{
    opacity: 1;
    transform: translatex(0px);
  }
  // .before-enter{

  // }
  //max-width: 1400px;
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    margin: 0;
    padding: 0;
  }
  background: $dark-color;
  .container2 {
    // padding-bottom: 4rem;
    //max-width: 1400px;
     width: 100%;
    background-image: url("/img/hero-img.png");
    background-size: 1000px;
    // background-position: 300px;
    background-position: right;
    background-repeat: no-repeat;
    margin-inline: auto;
    padding: 1rem 0;
    display: flex;
    transition-delay: 0.5s;
    .sx-text {
      // width: 40%;
      width: 80%;
      margin-inline: auto;
      padding-bottom: 4rem;
      z-index: 1;
    }
  }
  .text {
    margin: 4rem 0 2rem;
    padding: 1rem;
    border-radius: 10px;
    background: rgba($color: $dark-color, $alpha: 0.7);
    width: fit-content;
    color: $brand-color;
    font-size: 2.5rem;
    .logo {
      text-decoration: underline;
      display: flex;
      gap: 0.1rem;
      img {
        height: 4rem;
      }
      p {
        font-size: 3rem;
        margin-top: 0.3rem;
        font-family: "Josefin Sans", sans-serif;
      }
    }
    .lowercase {
      color: $primary-color;
    }
  }
  .link-router:hover {
    text-decoration: none;
  }
  .search-bar {
    width: fit-content;
    // margin-left: 10rem;
    display: flex;
    border-radius: 2.2rem;
    background: $white-color;
    transition: 0.3s;
    &:hover{
      transform: scale(1.05);
    }
    .submit {
      cursor: pointer;
      border: 0;
      border-radius: 50%;
      background: $brand-color;
      width: 2.2rem;
      height: 2.2rem;
      &:hover {
        color: white;
      }
      i{
        margin: 3px 3px 0 0;
      }
    }
    .input {
      display: flex;
      align-items: center;
      color: lightslategray;
      font-size: 0.8rem;
      padding: 3px 1rem 0;
      border: 0;
      background: transparent;
      &:hover {
        text-decoration: none;
      }
      &::placeholder {
        font-size: 0.8rem;
        color: lightslategrey;
      }
      &:focus {
        outline: 0;
      }
    }
  }
  .wave {
    width: 100%;
    height: 60px;
    color: #38a3a5;
  }
}

// @media screen and (min-width: 1280px) and (max-width: 1900px) {
//   #hero {
//     margin-inline: auto;
//     max-width: 1899px;
//     //width: 100%;
//     .container2 {
//       width: 100%;
//       background-image: url("/img/hero-img.png");
//       background-size: 1000px;
//       // background-position: 300px;
//       background-position: right;
//       background-repeat: no-repeat;
//     }
//   }
// }

// @media screen and (min-width: 768px) and (max-width: 1279px) {
//   #hero {
//     margin-inline: auto;
//     max-width: 1279px;
//     //width: 100%;
//     .container2 {
//       width: 100%;
//       background-image: url("/img/hero-img.png");
//       background-size: 1000px;
//       // background-position: 300px;
//       background-position: right;
//       background-repeat: no-repeat;
//     }
//   }
// }

// @media screen and (min-width: 320px) and (max-width: 767) {
//   #hero {
//     margin-inline: auto;
//     min-width: 320px;
//     .container2 {
//       width: 100%;
//     }
//   }
// }

@media screen and (max-width: 996px) {
  #hero{
    .container2{
      background-position: left;
    }
  }
  
}
@media screen and (max-width: 500px) {
  #hero{
    .container2{
      background: none;
      .sx-text{
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      // background-position: left;
    }
  }
  
}
</style>
