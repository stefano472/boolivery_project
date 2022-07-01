<template>
  <div>
    <div v-for="(category, index) in categories" :key="index">
      <p>{{category.name}}</p>
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

  // methods:{

  //   axiosCall() {
  //     const id = this.$route.params.id;

  //     console.log(id);

  //     window.axios
  //       .get("/api/restaurants/" + id)
  //       .then((result) => {
  //         this.arrayRestaurants = result.data.response[0].user;
  //         console.log(this.arrayRestaurants);
  //       })
  //       .catch((e) => console.log(e));
  //   },
  // },

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

<style>

</style>