import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import ProductComponent from './components/ProductComponent'

const vuetifyOptions = { }
Vue.use(VueRouter)
Vue.use(Vuetify)

require('./bootstrap');

window.Vue = require('vue');


 

Vue.component('product-component', require('./components/ProductComponent.vue'));
Vue.component('articles', require('./components/Articles.vue'));


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'ProductComponent',
            component: ProductComponent
        },
    ],
});


const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(vuetifyOptions),
});
