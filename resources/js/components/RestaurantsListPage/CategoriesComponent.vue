<template>
  <div class="categories-list">
    <div
      v-for="(category, index) in categories.slice(0, 5)"
      :key="index"
      class="categories-cards"
    >
      <div @click="emitCategory(category.id)">
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

      arrayRestaurants: [],
    };
  },

  methods: {
    emitCategory(idCategory) {
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
}

.categories-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  column-gap: 30px;
  row-gap: 30px;
  padding: 60px 86px;
  background-color: #1e282f;
  .categories-cards {
    position: relative;

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
</style>
