import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import SingleRestaurant from './pages/SingleRestaurant';
import RestaurantsList from './pages/RestaurantsList';
import PaymentPage from './pages/checkout/PaymentPage';
import SuccessPayment from './pages/checkout/SuccessPayment';
// import FilteredList from './pages/FilteredList';
// import FilteredList from './pages/FilteredList';
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
            path: '/restaurant/:id',
            name: 'restaurant',
            component: SingleRestaurant
        },
        {
             path: '/restaurants',
             name: 'restaurants',
             component: RestaurantsList
        },
        {
            path: '/payment',
            name: 'payment',
            component: PaymentPage
        },
        {
            path: "/payment/success",
            name: "success",
            component: SuccessPayment
        },
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
