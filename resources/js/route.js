import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import SingleRestaurant from './pages/SingleRestaurant';
import RestaurantsList from './pages/RestaurantsList';
// import BlogComponent from './pages/BlogComponent';
// import SingleBlogComponent from './pages/SingleBlogComponent';
// import WhoWeAreComponent from './pages/WhoWeAreComponent';
// import ContactsComponent from './pages/ContactsComponent';
// import NotFoundComponent from './pages/NotFoundComponent';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/restaurant',
            name: 'restaurant',
            component: SingleRestaurant
        },
        {
             path: '/restaurants',
             name: 'restaurants',
             component: RestaurantsList
        },
        // {
        //     path: '/blog/:slug',
        //     name: 'single-blog',
        //     component: SingleBlogComponent
        // },
        // {
        //     path: '/who-we-are',
        //     name: 'who-we-are',
        //     component: WhoWeAreComponent
        // },
        // {
        //     path: '/contacts',
        //     name: 'contacts',
        //     component: ContactsComponent
        // },
        // {
        //     path: '/*',
        //     name: 'not-found',
        //     component: NotFoundComponent
        // }
    ]
})

export default router;
