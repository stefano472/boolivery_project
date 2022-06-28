<template>
  <footer>
    <div class="container-footer">

      <!-- TITLE -->
      <div class="footer-title">
        <h5>Hai bispgno di aiuto? Contattaci!</h5>
      </div>


      <!-- CONTENT -->
      <div class="footer-content">
        
        <!-- logo and site language -->
        <div class="logo-lang">
          
          <div class="logo">
            <img src="img/footer/logo.svg" alt="">
          </div>

          <div class="language">
            <i class="fa-solid fa-globe"></i>
            <span>Italiano </span>
          </div>

        </div>

        <!-- contacts -->
        <div class="contact-us">
          <!-- contact us title -->
          <p id="contact-title">Contatti</p>

          <div class="contacts">

            <!-- PHONE NUMBER -->
            <div class="ico-text">

              <!-- icon contacts -->
              <i class="fa-solid fa-phone-flip"></i>

              <!-- text contacts -->
              <p>+39 3823332389</p>

            </div>

            <!-- FAX -->
            <div class="ico-text">

              <!-- icon contacts -->
              <i class="fa-solid fa-fax"></i>

              <!-- text contacts -->
              <p>390639967700@efaxsend.com</p>

            </div>

            <!-- EMAIL ADDRESS -->
            <div class="ico-text">
              
              <!-- icon contacts -->
              <i class="fa-solid fa-envelope"></i>

              <!-- text contacts -->
              <p>boolivery@contacts.com</p>

            </div>


          </div>
        </div>

        <!-- instagram feed -->
        <div class="instagram-feed">
          
          <!-- INSTA FEED TITLE -->
          <p>Instagram feed</p>

          <!-- PHOTOS -->
          <div class="insta-photos">
            <img src="img/footer/insta-feed.jpg" alt="">
          </div>

        </div>

      </div>

      <!-- COPYRIGHT -->
      <div class="copyright">
        <p>&copy; 2022 Powered by Team 1</p>
      </div>


    </div>
  </footer>
</template>

<script>
export default {
    name: 'FooterComponent',
}
</script>

<style lang="scss" scoped>

footer{

  background-color: #1e282f;
  .container-footer{
    width: 80%;
    margin: 0 auto;
    padding: 28px 0;
    color: #38a3a5;
    .footer-title{
      text-align: center;
    }
    .footer-content{
      display: flex;
      justify-content: space-between;
      margin: 34px 0;
      align-items: center;
      flex-wrap: wrap;

      .logo-lang{
        width: 20%;
        text-align: center;
        padding-top: 28px;
        img{
          width: 87px;
          margin-bottom: 22px;
        }
        .language{
          font-size: 12px;
          color: gray;
        }
      }

      .contact-us{
        display: flex;
        flex-direction: column;
        padding-left: 8%;
        width: 40%;

        #contact-title{
          font-size: 20px;
          font-weight: 600;
          color: #38a3a5;
        }
        .contacts{
          row-gap: 5px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          margin-top: 7px;

          .ico-text {
            display: flex;
            column-gap: 18px;
            align-items: center;
            margin-bottom: 20px;
            padding-right: 40px;
            i{
              color: #98f1ad;
            }
            p{
              margin-bottom: 0;
              color: white;
            }
          }

        }
      }

      .instagram-feed{
        display: flex;
        flex-direction: column;
        width: 20%;
        p{
          font-size: 20px;
          font-weight: 600;
          color: #38a3a5;
        }
        img{
          width: 180px;

        }
      }
    }
    .copyright{
      text-align: center;
      padding-top: 30px;
      border-top: 1px solid gray;
    }

  }
}


 @media screen and (max-width: 850px){

    footer{
      .container-footer{
        .contact-us{
          padding-left: 4%;
        }
      }
    }
        
 }


@media screen and (max-width: 770px){

    footer{
      .container-footer{

        .footer-content{
          justify-content: space-around;
          row-gap: 41px;

          .logo-lang{
            width: 42%;
          }
          .contact-us{
            width: 42%;
            padding-left: 0%;
          }

          .instagram-feed{
            width: 40%;
            align-items: center;
          }
        }
        
      }
    }
        
 }

 @media screen and (max-width: 593px){

    footer{
      .container-footer{

        .footer-content{
          justify-content: space-around;
          row-gap: 41px;

          .logo-lang{
            width: 100%;
          }
          .contact-us{
            width: 100%;
            padding-left: 0%;
            align-items: center;
          }

          .instagram-feed{
            width: 100%;
            align-items: center;
          }
        }
        
      }
    }
        
 }

  @media screen and (max-width: 326px){

    footer{
      .container-footer{
        .footer-content{
          .contact-us{
            .contacts{
              font-size: 12px;
              padding-left: 22%;
            }
          }
        }
        
      }
    }
        
 }


</style>