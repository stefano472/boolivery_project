<template>
  <div>
    <!-- Categorie -->
    <CategoriesComponent />

    <!-- SearchBar per i filtri -->
    <!-- <div class="search-bar">

          <button @click="getInput" class="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          
          <input v-model="inputSearch" type="text" class="input" placeholder="Search...">
    </div> -->

    <!-- Lista dei filtri -->
    <FilterComponents :restaurants="restaurants"/>
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

            //inputSearch: '',
        }
        
    },

    methods:{

    axiosCall() {
      const id = this.$route.params.id;

      console.log(id);

      window.axios
        .get('http://127.0.0.1:8000/api/restaurants/' + id)
        .then(({status, data}) => {

          
          if (status === 200 && data.success) {
            
                this.arrayRestaurants = data.results

                console.log(this.arrayRestaurants);
            }

        })
        .catch((e) => console.log(e));
    },
  },

    mounted(){
        
        // window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {

        //     if (status === 200 && data.success) {
        //         this.restaurants = data.results
        //     }
        // }).catch(e => console.log(e))

        this.axiosCall();

    },

    // computed: {
    // filteredProducts(){
        
    //     return this.products.filter((product) => {

    //         return product.categories.filter((category) => { 
    //             return category.id === this.selectedCategory; 
    //          }).length > 0;
    //     }
    // },
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
