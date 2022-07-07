<template>
  <div id="contacts" class="social-component">
    <!-- Titolo dei social -->
    <h1>SEGUICI SUI SOCIAL</h1>

    <!-- icone dei social -->
    <div class="social-box">
      <!-- Facebook -->
      <div class="social-icon">
        <a href="https://www.facebook.com/" target="_blank">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>

      <!-- Instagram -->
      <div class="social-icon">
        <a href="https://www.instagram.com/" target="_blank">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <!-- Twitter -->
      <div class="social-icon">
        <a href="https://twitter.com/" target="_blank">
          <i class="fa-brands fa-twitter"></i>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SocialComponent",
};
</script>

<style lang="scss" scoped>
.social-component {
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 27px;
  padding: 77px 0;
  background-color: #38a3a5;
  color: white;
  .social-box {
    display: flex;
    width: 275px;
    justify-content: space-between;
    .social-icon {
      a {
        color: black;
        font-size: 30px;
        background-color: #98f1ad;
        border-radius: 50%;
        padding-top: 16px;
        padding-left: 14px;
        padding-right: 14px;
        padding-bottom: 9px;
        &:hover {
          background-color: #cafbd6;
        }
      }
    }
  }
}

@media screen and (max-width: 715px) {
  .social-component {
    .social-box {
      width: 42%;
    }
  }
}

@media screen and (max-width: 459px) {
  .social-component {
    .social-box {
      flex-wrap: wrap;
      .social-icon {
        width: 100%;
        text-align: center;
        margin-bottom: 47px;
        a {
          font-size: 53px;
        }
      }
    }
  }
}

@media screen and (max-width: 333px) {
  .social-component {
    h1 {
      font-size: 21px;
    }
  }
}
</style>
