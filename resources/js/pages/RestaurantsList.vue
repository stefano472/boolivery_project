<template>
  <div>
    <i @click="scrollToTop()" v-if="scY > 100" class="fa-solid fa-circle-arrow-up btn-totop"></i>

    <!-- Categorie -->
    <CategoriesComponent :categoryFilter='categoryFilter' @categorySelected='categorySelected' />

    <!-- SearchBar per i filtri -->
    <!-- <div class="search-bar">

          <button @click="getInput" class="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          
          <input v-model="inputSearch" type="text" class="input" placeholder="Search...">
    </div> -->
  
    <!-- Lista dei filtri -->
    <FilterComponents :restaurants="filteredRestaurants" :categoryFilter='categoryFilter' @categorySelected='categorySelected' />
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
    props: {
      categoriaSelezionataHome: Number
    },

    data(){

        return {
            restaurants: [],

            filteredRestaurants : [],

            categoryFilter: null,

            categoriesArray:[],

            scTimer: 0,

            scY: 0,
        }
        
    },

    methods:{
        scrollToTop(){
          window.scrollTo({
            top: 0,
            behavior: "smooth"
          });
        },
        handleScroll() {
          if (this.scTimer) return;
          this.scTimer = setTimeout(() => {
            this.scY = window.scrollY;
            clearTimeout(this.scTimer);
            this.scTimer = 0;
          }, 100);
        },
      categorySelected(categoryId){
        if(this.categoryFilter === categoryId){
          this.categoryFilter = null
        } else {
          this.categoryFilter = categoryId
        }
        this.chiamataAxios()

      },
      categoryCheckbox(categoriesGroup){
        if(!this.categoriesArray.includes(categoriesGroup)){
          this.categoriesArray.push(categoriesGroup)
          } else {
            let index = this.categoriesArray.indexOf(categoriesGroup, 0)
            this.categoriesArray.splice(index, 1)
        }
        console.log('categorycheckbox', this.categoriesArray)
        this.chiamataAxios()

      },
      chiamataAxios() {
        window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {
      
                  if (status === 200) {
                    this.restaurants = data.response;
                    this.filteredRestaurants= [];
                    // console.log('dati', data)
                    if (this.categoryFilter){
                      this.restaurants.forEach(restaurant => {
                        restaurant.categories.forEach(category => {
                          // console.log('category', category)
                          // this.categoriesArray.forEach(checkedCategory=>{
                            
                            // restaurant.categories === this.categoriesArray
                            //   if(category.id === checkedCategory){
                            //     this.filteredRestaurants.push(restaurant)
                            //   }
                            // })
                            if(category.id === this.categoryFilter){
                              this.filteredRestaurants.push(restaurant)
                            }
                        })
                      });
                    } else {
                      this.filteredRestaurants = this.restaurants
                    }
                        // console.log ('filtered rest', this.filteredRestaurants)
                  }
              }).catch(e => console.log(e))   
      }
    },

    mounted(){
      window.axios.get('http://127.0.0.1:8000/api/restaurants').then(({status, data})=> {
        
        // if (status === 200) {
        //           console.log(this.categoriaSelezionataHome, 'idcategoria')
        //           console.log('dati', data)
        //             this.filteredRestaurants = data.response
        //         }
        
          if (status === 200) {
                  this.restaurants = data.response
                  this.filteredRestaurants= [],
                  // console.log('dati', data)
                  this.restaurants.forEach(restaurant => {
                    if (this.categoriaSelezionataHome){
                      restaurant.categories.forEach(category => {
                        if(category.id === this.categoriaSelezionataHome){
                          this.categoryFilter = this.categoriaSelezionataHome;
                          this.filteredRestaurants.push(restaurant)
                        }
                      })
                    } else {
                      this.filteredRestaurants = data.response
                    }
                  });
                      // console.log ('filtered rest', this.filteredRestaurants)
                }
            }).catch(e => console.log(e))        
    },
    created () {
      window.addEventListener('scroll', this.handleScroll);
    },
    destroyed () {
      window.removeEventListener('scroll', this.handleScroll);
    },

}

</script>

<style scoped lang="scss">

@import 'resources/sass/variables';

.btn-totop{
    // display: none;
    position: fixed;
    bottom: 20px;
    right: 25px;
    z-index: 99;
    font-size: 30px;
    border: none;
    outline: none;
    background-color: $primary-color;
    color: white;
    cursor: pointer;
    padding: 8px;
    // border-radius: 50%;
    border-radius: 10px;
    transition: 0.3s;
    box-shadow: 0 2px 4px rgba($color: #000000, $alpha: 0.2);
    &:hover{
      transform: scale(1.05);
    }
}
// .search-bar {
//     width: fit-content;
//       // margin-left: 10rem;
//       display: flex;
//       border-radius: 2.2rem;
//       background: $white-color;
//       .submit {
//         cursor: pointer;
//         border: 0;
//         border-radius: 50%;
//         background: $brand-color;
//         width: 2.2rem;
//         height: 2.2rem;
//         &:hover {
//           color: white;
//         }
//       }
//       .input {
//         width: 20rem;
//         font-size: 0.8rem;
//         padding: 0 1rem;
//         border: 0;
//         background: transparent;
//         &::placeholder {
//           font-size: 0.8rem;
//           color: lightslategrey;
//         }
//         &:focus {
//           outline: 0;
//         }
//       }

// }

</style>
