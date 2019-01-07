require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import VueResource from 'vue-resource';
import index from './components/index.vue';
import {routes} from './routes';
 

Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(VueResource);


const router = new VueRouter({
	routes,
	mode:'history'
});
 
const app = new Vue({
    el: '#app',
    router 
});
