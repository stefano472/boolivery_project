<template>
  <div id="description">
    <div class="about-us">
      <h2>ABOUT US</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi
        deserunt natus assumenda dicta! Nobis quod necessitatibus corporis
        architecto qui officia explicabo ab debitis maxime ut reiciendis labore,
        nesciunt perspiciatis accusantium. Voluptatem autem adipisci aliquam
        ducimus eveniet error sapiente! Dolore sapiente quam aperiam repudiandae
        minus nihil magnam deleniti iure suscipit magni illo earum delectus
        animi, autem deserunt nobis ratione cupiditate iste similique
        architecto! In accusantium dolores commodi ad blanditiis ipsa similique
        tenetur sed repellat minima, labore, nulla veritatis quo.
      </p>
    </div>

    <div class="description-cover">
      <img
        src="/img/img_rest/jakub-kapusnak-4f4YZfDMLeU-unsplash-1024x683.jpeg"
        alt=""
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "DescriptionComponent",
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

#description {
  background: $brand-color;
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 50px;
  .about-us {
    width: 30%;
    margin-right: 50px;
    h2 {
      color: $primary-color;
    }
  }
  .description-cover {
    margin-left: 50px;
    img {
      width: 400px;
    }
  }
}

@media screen and (max-width: 1024px) {
  #description {
    flex-direction: column;
    .about-us {
      width: 100%;
    }
    .description-cover {
      width: 100%;
      img {
        width: 100%;
      }
    }
  }
}
</style>
