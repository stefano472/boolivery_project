<template>
    <div class="out-container">
        <div class="info-container">
            <div class="info-title">
                <h2>Informazioni ristorante</h2>
            </div>
            <div class="box">
                <div class="address">
                    <h5>Indirizzo</h5>
                    <p>Via Roma, 21</p>
                </div>
                <div class="contacts">
                    <h5>Contatti</h5>
                    <p>Phone: +1 800 755 50 30</p>
                    <p>
                        Email: <a href="#">contacts@company.com</a>
                    </p>
                </div>
                <div class="opening">
                    <h5>Orari</h5>
                    <p>Mon-Fri 10:00 - 19:00</p>
                    <p>Sat-Sun 10:00 - 14:00</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'InfoRestaurantComponent'

}
</script>

<style lang="scss" scoped>
@import 'resources/sass/variables';

.out-container{
    background-color: $brand-color;
}
.info-container{
    width: 70%;
    max-width: 1400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-inline: auto;

    .info-title{
        padding: 40px 0;
        text-transform: uppercase;
        color: $primary-color;
    }
    .box{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        row-gap: 1rem;
        margin-bottom: 2rem;

    }
    .address, .contacts, .opening{
        width: 33%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 10px;

         h5{
            margin: 15px 0;
            text-transform: uppercase;
            font-size: 0.9rem;
            font-weight: 600;
        }
        p{
            font-size: 0.8rem;
            margin-bottom: 7px;
        }
    }
    a{
        text-decoration: underline;
        color: $dark-color;
        cursor: pointer;
    }
}

</style>
