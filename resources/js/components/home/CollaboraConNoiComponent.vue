<template>
  <div id="collab">
    <div class="collab-cover"></div>
    <div class="collab-text">
      <h2>COLLABORA CON NOI</h2>
      <p>
        Aumenta le tue vendite diventando partner del più grande servizio online
        di ordini a domicilio d'Italia. Metti il tuo ristorante a disposizione
        di migliaia di nuovi clienti entrando nel gruppo Boolivery. Appena
        affiliato avrai più ordini, le tecnologie più recenti, pubblicità e un
        servizio clienti dedicato.
      </p>
      <div>
        <button class="btn btn_blue">Diventa partner ></button>
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
  display: flex;
  background-color: white;
  .collab-cover {
    background-image: url("/img/img rest/collab.jpg");
    background-size: 120%;
    background-repeat: no-repeat;
    background-position: 90% 25%;
    width: 60%;
    min-height: 500px;
  }
  .collab-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 35%;
    text-align: end;
    padding-right: 85px;
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
      border-color: $primary-color;
      &:hover {
        background-color: $primary-color;
      }
    }
  }
}

@media screen and (max-width: 767px) {
  #collab {
    flex-direction: column;
    .collab-cover {
      width: 100%;
    }
    .collab-text {
      width: 100%;
    }
  }
}
</style>
