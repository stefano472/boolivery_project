<template>
  <div id="hero">
    <div class="container2">
      <div class="text">
        <div class="logo">
          <img src="logo.svg" alt="logo">
          <p>oolivery</p>
        </div>
        <p class="lowercase">i ristoranti</p>
        <p class="uppercase">A UN CLICK</p>
      </div>
      <div class="search-bar">
        <button @click="getInput" class="submit">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
        <input v-model="inputSearch" type="text" class="input" placeholder="Search...">
      </div>
    </div>
    <svg class="wave">
        <use xlink:href='img/wave.svg#wave-1hkxOo'></use>
    </svg>
  </div>
</template>

<script>
export default {
    name:'HeroComponent'
}
</script>

<style scoped lang="scss">
@import 'resources/sass/variables';

#hero{
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
    padding-bottom: 4rem;
    background-image: url("/img/hero-img.png");
    background-size: 90%;
    background-repeat: no-repeat;
    background-position-x: 300px;
    background-position-y: -100px;
  }
  .text {
    padding: 4rem 0 2rem 10rem;
    color: $brand-color;
    font-size: 2.5rem;
    .logo{
      text-decoration: underline;
      display: flex;
      gap: 0.1rem;
      img{
        height: 4rem;
      }
      p{
        font-size: 3rem;
        margin-top: 0.3rem;
        font-family: 'Josefin Sans', sans-serif;
      }
    }
  	.lowercase{
      color: $primary-color;
    }
  }
  .search-bar {
    width: fit-content;
      margin-left: 10rem;
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
        width: 20rem;
        font-size: 0.8rem;
        padding: 0 1rem;
        border: 0;
        background: transparent;
        &::placeholder {
          font-size: 0.8rem;
          color: lightslategrey;
        }
        &:focus {
          outline: 0;
        }
      }
    }
  .wave{
    width: 100%;
    height: 60px;
    color: #38a3a5;
  }
}
</style>