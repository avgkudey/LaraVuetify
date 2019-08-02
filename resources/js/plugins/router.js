import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../components/Home.vue';

Vue.use(VueRouter)


let routes = [
    {path: '/dash', component: Home},
    // {path: '*', component: NotFoundView}
];

export default  new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});