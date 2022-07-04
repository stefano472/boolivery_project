<template>
   <div class="container">

    <div class="other-categories-list">
        <h2> Categorie </h2>
        
        <div v-for="(category, index) in categories" :key="index" @click="emitCategory(category.id)">

            <p>{{category.name}}</p>

        </div>
    </div>


    <div class="restaurants-list">
        <h1>Ristoranti</h1>
        <RestaurantCard :restaurants="restaurants"/>
    </div>
     
  </div>
</template>

<script>

import RestaurantCard from './RestaurantCard.vue'
export default {
name: 'FilterComponent',

data(){
    return {
        categories: '',
    }
},

methods:{
    emitCategory(idCategory){
        this.$emit('categorySelected', idCategory)
    },
},

mounted(){
    window.axios.get('http://127.0.0.1:8000/api/categories').then(({status, data})=> {

            if (status === 200 && data.success) {
                this.categories = data.results
            }
        }).catch(e => console.log(e));

        // this.axiosCall();
        
 },

components:{
    RestaurantCard
},

props:{
    restaurants: Array, 
}
}
</script>

<style scoped lang="scss">

.container{
    display: flex;
    justify-content: space-between;
    margin-top: 70px;
    margin-bottom: 70px;
    .other-categories-list{
        h2{
            margin-bottom: 36px;
        }

        div{
            p{
                width: 50%;
                color: #38A3A5;
                &:hover{
                    cursor: pointer;
                    border-bottom: 1px solid #38A3A5;
                    border-radius: 5px;
                }
            }
        }
    }
}

</style>