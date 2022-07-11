<template>
  <div class="categories-list">
    <div
      v-for="(category, index) in categories.slice(0, 5)"
      :key="index"
      class="categories-cards"
    >
      <div @click="emitCategory(category.id)" :class="category.id == categoryFilter ? 'active-category' : ''" class="category-card">
        <img :src="setUrlCategoryCover(category.img)" alt="" />
        <p>{{ category.name }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CategoriesComponent",

  data() {
    return {
      category: "",
      categories: [],
      // categorySelected:'',
      arrayRestaurants: [],
    };
  },
  props:{
    categoryFilter : Number
  },

  methods: {
    emitCategory(idCategory) {
      // this.categorySelected = idCategory
      this.$emit("categorySelected", idCategory);
    },
    // setUrlFilters(index){

    //   const url = 'http://127.0.0.1:8000/restaurants/' + index;

    //   return url;

    // },

    setUrlCategoryCover(cover) {
      const url = cover;

      return url;
    },
  },

  mounted() {
    window.axios
      .get("http://127.0.0.1:8000/api/categories")
      .then(({ status, data }) => {
        if (status === 200 && data.success) {
          this.categories = data.results;
        }
      })
      .catch((e) => console.log(e));

    // this.axiosCall();
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 98px;
  border-radius: 2px;
}

.categories-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  column-gap: 30px;
  row-gap: 30px;
  padding: 130px 0 60px;
  background-color: #1e282f;
  .categories-cards {
    position: relative;
    .active-category{
      cursor: pointer;
      p {
        opacity: 1;
      }
      img {
        filter: opacity(0.5);
      }
    }

    p {
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-weight: 600;
      color: white;
    }
    &:hover {
      cursor: pointer;
      p {
        opacity: 1;
      }
      img {
        filter: opacity(0.5);
      }
    }
  }
}

@media screen and(max-width: 680px) {
  .categories-list{
        padding: 130px 100px 60px;
    // .categories-cards{
    //   &:last-child{
    //     // display: none;
    //   }
    //   // .category-card{
    //   // }
    // }
  }
  
}
@media screen and(max-width: 553px) {
  .categories-list{
    padding: 130px 60px 60px;
    // .categories-cards{
    //   &:last-child{
    //     display: none;
    //   }
      // .category-card{
      // }
    // }
  }
  
}
@media screen and(max-width: 473px) {
  .categories-list{
    padding: 130px 60px 60px;
    .categories-cards{
      &:last-child{
        display: none;
      }
      // .category-card{
      // }
    }
  }
  
}
</style>
