<template>
  <div id="about-us" class="container-section">
    <div class="container-chi-siamo" v-scrollAnimation>
      <div class="img-container">
        <img src="img/img_rest/chi-siamo.png" alt="" />
      </div>
      <div class="description-container">
        <h1>BOOLIVERY</h1>
        <h2>CHI SIAMO</h2>
        <p>
          <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
          quidem eos. Consequatur, itaque assumenda aspernatur, ducimus
          asperiores doloribus et at consectetur error nulla nemo hic beatae
          dignissimos expedita exercitationem velit? Lorem, ipsum dolor sit amet
          consectetur adipisicing elit. Praesentium, quibusdam incidunt nulla
          culpa veritatis laboriosam quidem obcaecati nam quod porro commodi
          recusandae ut quam voluptatum ad dicta officia assumenda eaque! -->
          Siamo 5 ragazzi che hanno avuto la caparbietà di creare una start-up di food delivery.
          <!-- Per il momento abbiamo idea di imporci sul mercato nel comune di Milano. 
          La nostra ambizione è di poterci espandere in tutta italia, oppure chissà, magari qualcosa
          di più in futuro! Keep pushing :rocket -->
        </p>
        <p>Per il momento abbiamo idea di imporci sul mercato nel comune di Milano.</p>
        <p>
          La nostra ambizione è di poterci espandere in tutta italia, oppure chissà, magari qualcosa
          di più in futuro!
        </p>
        <p>Nel frattempo, Keep Pushing 🚀🚀</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ChiSiamoComponent",
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

.container-section {
  background-color: $primary-color;
  width: 100%;
  display: flex;
  // flex-wrap: wrap;
  justify-content: center;
  padding: 80px 0;

  .container-chi-siamo {
    display: flex;
    // flex-wrap: wrap;
    gap: 3rem;
    align-items: center;
    justify-content: center;
    margin: 0 10%;
    transition-delay: 0.5s;

    .img-container {
      // flex-basis: 50%;
      // padding: 0px 50;

      img {
        width: 25rem;
        border-radius: 10px;
        padding-bottom: 20px;
      }
    }

    .description-container {
      flex-basis: 50%;
      // padding: 0px 50;

      h1 {
        color: $white-color;
        font-size: 2.5rem;
      }
      h2 {
        color: $secondary-color;
        font-size: 2rem;
      }
      p {
        color: $dark-color;
        font-size: 16px;
        margin: 0;
        // padding-top: 20px;
      }
    }
  }
}

@media (max-width: 1900px) {
  .container-section {
    width: 100%;
    // flex-direction: column;
    .container-chi-siamo {
      .description-container {
        h1 {
          font-size: 2.5rem;
        }
        h2 {
          font-size: 2rem;
        }
      }
    }
  }
}

@media (max-width: 1400px) {
  .container-section {
    width: 100%;
    // flex-direction: column;
    .container-chi-siamo {
      .description-container {
        h1 {
          font-size: 2.2rem;
        }
        h2 {
          font-size: 1.8rem;
        }
      }
    }
  }
}

@media (max-width: 992px) {
  .container-section {
    width: 100%;
    flex-direction: column;
    .container-chi-siamo {
      flex-direction: column;
      .description-container {
        h1 {
          font-size: 2rem;
          text-align: center;
        }
        h2 {
          font-size: 1.6rem;
          text-align: center;
        }
        p{
          text-align: center;
        }
      }
    }
  }
}

@media (max-width: 768px) {
  .container-section {
    width: 100%;
    flex-direction: column;
    .container-chi-siamo {
      .description-container {
        h1 {
          font-size: 1.8rem;
        }
        h2 {
          font-size: 1.4rem;
        }
      }
    }
  }
}

@media (max-width: 576px) {
  .container-section {
    flex-direction: column;
    .container-chi-siamo {
      display: flex;
      flex-direction: column;
      .img-container {
        display: flex;
        // padding: 0;
        // margin: 0;
        // padding-left: 15px;
        img {
          width: 80%;
          margin-inline: auto;
        }
      }
      .description-container {
        padding: 0px 10px;
      }
    }
  }
}
</style>
