<template>
  <div class="container">
    <div class="other-categories-list" v-scrollAnimation>
      <h4>CATEGORIE</h4>
      <div class="categories">
        <div
          class="category"
          v-for="(category, index) in categories"
          :key="index"
          @click="emitCategory(category.id)"
        >
          <!-- <div>
            <input type="checkbox" name="categories"  v-model="categoriesSelected" :value="category.id" @click="emitCategoriesSelected(category.id)" >
            <label for="categories">{{ category.name }}</label>
          </div> -->
          <p :class="category.id == categoryFilter ? 'active-category' : ''">{{ category.name }}</p>
        
        </div>
      </div>
    </div>

    <div class="restaurants-list">
      <!-- {{categoriesSelected}} -->
      <h1>RISTORANTI</h1>
      <RestaurantCard :restaurants="restaurants" v-scrollAnimation />
    </div>
  </div>
</template>

<script>
import RestaurantCard from "./RestaurantCard.vue";
export default {
  name: "FilterComponent",

  data() {
    return {
      categories: "",
      // categorySelected: '',
    };
  },

  methods: {
    emitCategory(idCategory) {
      // this.categorySelected = idCategory
      this.$emit("categorySelected", idCategory);
    },
    // emitCategoriesSelected(idCategory) {
    //   this.$emit("categoryCheckbox", idCategory);
    // },
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

  components: {
    RestaurantCard,
  },

  props: {
    restaurants: Array,
    categoryFilter: Number,
  },
};
</script>

<style scoped lang="scss">
@import 'resources/sass/variables';


.container {
  display: flex;
  justify-content: space-between;
  margin-top: 50px;
  margin-bottom: 50px;
  .other-categories-list {
    h2 {
      margin-bottom: 36px;
    }
    .category {
      .active-category{
          background: $brand-color;
      }
      p {
        margin-bottom: 0.3rem;
        color: $primary-color;
        padding: 0.4rem 0.75rem;
        border-radius: 5px;
        &:hover {
          cursor: pointer;
          background: $brand-color;
        }
      }
    }
  }
  .restaurants-list {
    margin-left: 80px;
    h1 {
      font-size: 2.5rem;
    }
  }
}

@media screen and (max-width: 495px) {
  .container {
    flex-direction: column;
    .other-categories-list {
      display: flex;
      flex-direction: column;
      padding-bottom: 30px;
      .categories {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        .category {
          margin: 15px;
          width: 80px;
        }
      }
    }
    .restaurants-list {
      margin: 0;
    }
  }
}
</style>
