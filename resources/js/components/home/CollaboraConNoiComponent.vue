<template>
  <div id="collab">
    <div class="coll">
      <div class="collab-cover"></div>
      <div class="collab-text" v-scrollAnimation>
        <h2>COLLABORA CON NOI</h2>
        <p>
          Aumenta le tue vendite diventando partner del più grande servizio online
          di ordini a domicilio di Milano. Metti il tuo ristorante a disposizione
          di migliaia di nuovi clienti entrando nel gruppo Boolivery. Appena
          affiliato avrai più ordini, le tecnologie più recenti, pubblicità e un
          servizio clienti dedicato.
        </p>
        <div>
          <form action="/register">
            <button class="btn btn_blue">Diventa partner ></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CollaboraConNoiComponent",
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

#collab {
  // display: flex;
  background-color: white;
  .coll{
    display: flex;
    .collab-cover {
      // background-image: url("/img/img_rest/collab.jpg");
      background-image: url("/img/collab-small.png"); 
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      width: 60%;
      min-height: 500px;
    }
    .collab-text {
      // background-image: url("/img/collab-small.png");
      // background-size: contain;
      // background-repeat: no-repeat;
      // background-position: center;
      // width: 60%;
      // min-height: 500px;
      margin: 3rem 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      width: 30%;
      text-align: end;
      // padding-right: 85px;
      h2 {
        font-size: 2.5rem;
        font-weight: 600;
        color: $primary-color;
      }
      p {
        color: $primary-color;
        margin-top: 2rem;
        margin-bottom: 2rem;
      }
      button {
        color: $primary-color;
        border-color: $primary-color;
        // margin-bottom: 50px;
        transition: 0.2s;
        &:hover {
          color: $white-color;
          background-color: $primary-color;
        }
      }
    }
  }
}

@media screen and (max-width: 767px) {
  #collab {
    .coll{
      flex-direction: column;
      .collab-cover {
        width: 100%;
      }
      .collab-text {
        margin-top: 0;
        width: 80%;
        margin-inline: auto;
        padding-right: 15px;
        text-align: center;
      }
    }
  }
}

@media screen and (max-width: 400px) {
  #collab {
    .coll{
      flex-direction: column;

      .collab-cover {
        width: 100%;
        background-size: cover;
        min-height: 300px;
      }
      .collab-text {
        width: 80%;
        margin-inline: auto;
        padding-right: 15px;
        text-align: center;
      }
    }
  }
}
</style>
