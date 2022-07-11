<template>
  <div id="services">
    <div class="container">
      <div class="section-title">
        <h2>BOOLIVERY</h2>
        <h3>Portiamo il cibo per tutta la city</h3>
      </div>
      <div class="services-list">
        <div class="service">
          <i class="mb-2 fas fa-motorcycle fa-2x"></i>
          <span>CONSEGNA RAPIDA E GRATUITA</span>
          <p>
            La rapidità è un nostro punto d'orgoglio. Ordina o invia qualsiasi
            cosa nella tua città e lo ritireremo e te lo consegneremo nel giro
            di qualche minuto.
          </p>
        </div>
        <div class="service">
          <i class="mb-2 fas fa-check fa-2x"></i>
          <span>SICUREZZA E CONTROLLO</span>
          <p>
            Abbiamo un team dedicato a seguire tutta la tua esperienza con
            Boolivery, dal momento in cui effettui l'ordine a quando ti viene
            consegnato.
          </p>
        </div>
        <div class="service">
          <i class="mb-2 fas fa-money-bill-alt fa-2x"></i>
          <span>SODDISFATTI O RIMBORSATI</span>
          <p>
            Non sei soddisfatto del prodotto? Rimborseremo l'importo pagato
            interamente. La vostra soddisfazione è alla base delle nostre
            politiche di reso.
          </p>
        </div>
        <div class="service">
          <i class="mb-2 fas fa-leaf fa-2x"></i>
          <span>ECO FRIENDLY</span>
          <p>
            Evitare la plastica si può, almeno dove è possibile. Noi di
            Boolivery crediamo fermamente nei benefici del packaging ecologico.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ServiziComponent",
};
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";

#services {
  background: $brand-color;
  padding: 3rem;
  .section-title {
    text-align: center;
    margin-bottom: 2rem;
    h2 {
      color: $primary-color;
    }
  }
  .services-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    row-gap: 2rem;
    .service {
      display: flex;
      flex-direction: column;
      width: 35%;
      text-align: center;
    }
  }
}

@media screen and (max-width: 630px) {
  .services-list {
    flex-direction: column;
    align-items: center;
    .service {
      width: 100% !important;
    }
  }
}
</style>
