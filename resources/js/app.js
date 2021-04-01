require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('example-component', require('./components/ExampleComponents').default)

//products
Vue.component('add-products', require('./components/products/ProductAdd').default)


import store from './store'
const app = new Vue ({
    el: '#app',
    store
});