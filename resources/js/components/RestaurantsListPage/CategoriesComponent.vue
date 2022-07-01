<template>
  <div class="categories-list">
    <div v-for="(category, index) in categories.slice(0,5)" :key="index">
      <a :href="setUrlFilters(category.id)">
        <img :src="setUrlCategoryCover(category.img)" alt="">
        <p>{{category.name}}</p>
      </a>
    
      
    
      
    </div>  
  </div>
</template>

<script>
export default {
 name: 'CategoriesComponent',

  data(){

        return {
            categories: [],

            arrayRestaurants: [],
        }
        
  },

  methods:{


      setUrlFilters(index){

        const url = 'http://127.0.0.1:8000/restaurants/' + index;

        return url;

      },

      setUrlCategoryCover(cover){

        const url = cover;

        return url;

      }


   },

 mounted(){
    window.axios.get('http://127.0.0.1:8000/api/categories').then(({status, data})=> {

            if (status === 200 && data.success) {
                this.categories = data.results
            }
        }).catch(e => console.log(e));

        // this.axiosCall();
        
 }
}
</script>

<style lang="scss" scoped>

img{
  width: 98px;
}

.categories-list{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  column-gap: 26px;
  padding: 60px 86px;
  background-color: #1e282f;
}

</style>