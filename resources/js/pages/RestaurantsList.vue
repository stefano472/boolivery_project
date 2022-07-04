<template>
  <div>
    <!-- Categorie -->
    <CategoriesComponent @categorySelected='categorySelected' />

    <!-- SearchBar per i filtri -->
    <!-- <div class="search-bar">

          <button @click="getInput" class="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          
          <input v-model="inputSearch" type="text" class="input" placeholder="Search...">
    </div> -->

    <!-- Lista dei filtri -->
    <FilterComponents :restaurants="filteredRestaurants" @categorySelected='categorySelected'/>
  </div>
</template>

<script>

import CategoriesComponent from '../components/RestaurantsListPage/CategoriesComponent.vue';
import FilterComponents from '../components/RestaurantsListPage/FilterComponents.vue';

export default {
    name: 'SingleRestaurant',
    components: {
        CategoriesComponent,
        FilterComponents,
    },

    data(){

        return {
            restaurants: [],

            filteredRestaurants : [],

            categoryFilter: '',
        }
        
    },

    methods:{
      categorySelected(categoryId){
        this.categoryFilter = categoryId,
        this.chiamataAxios()

      },

    chiamataAxios() {
      window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {
    
                if (status === 200) {
                  this.restaurants = data.response
                  this.filteredRestaurants= [],
                  console.log('dati', data)
                  this.restaurants.forEach(restaurant => {
                    restaurant.categories.forEach(category => {
                      if(category.id === this.categoryFilter){
                        this.filteredRestaurants.push(restaurant)
                      }
                    })
                  });
                      console.log ('filtered rest', this.filteredRestaurants)
                }
            }).catch(e => console.log(e))   
    }
  },

    mounted(){
            window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {
    
                if (status === 200) {
                  console.log('dati', data)
                    this.filteredRestaurants = data.response
                }
            }).catch(e => console.log(e))        
    },

}

</script>

<style scoped lang="scss">

@import 'resources/sass/variables';

.search-bar {
    width: fit-content;
      // margin-left: 10rem;
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

</style>
