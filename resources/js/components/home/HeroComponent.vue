<template>
  <div id="hero">
    <div class="container2">
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
          <div class="search-bar">
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
    margin-inline: auto;
    padding: 1rem 0;
    display: flex;
    .sx-text {
      // width: 40%;
      width: 80%;
      margin-inline: auto;
      padding-bottom: 4rem;
      z-index: 1;
    }
  }
  .text {
    padding: 4rem 0 2rem;
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
    }
    .input {
      display: flex;
      align-items: center;
      color: lightslategray;
      font-size: 0.8rem;
      padding: 0 1rem;
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

@media screen and (min-width: 1280px) and (max-width: 1900px) {
  #hero {
    margin-inline: auto;
    max-width: 1899px;
    //width: 100%;
    .container2 {
      width: 100%;
      background-image: url("/img/hero-img.png");
      background-size: 1000px;
      // background-position: 300px;
      background-position: right;
      background-repeat: no-repeat;
    }
  }
}

@media screen and (min-width: 768px) and (max-width: 1279px) {
  #hero {
    margin-inline: auto;
    max-width: 1279px;
    //width: 100%;
    .container2 {
      width: 100%;
      background-image: url("/img/hero-img.png");
      background-size: 1000px;
      // background-position: 300px;
      background-position: right;
      background-repeat: no-repeat;
    }
  }
}

@media screen and (min-width: 320px) and (max-width: 767) {
  #hero {
    margin-inline: auto;
    min-width: 320px;
    .container2 {
      width: 100%;
    }
  }
}
</style>
