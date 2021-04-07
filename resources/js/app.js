require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('example-component', require('./components/ExampleComponents').default)

//products
Vue.component('add-products', require('./components/products/ProductAdd').default)
Vue.component('edit-products', require('./components/products/ProductEdit').default)

//stocks
Vue.component('stock-manage', require('./components/stocks/StockManage').default)

//return products
Vue.component('return-product', require('./components/return_products/ReturnProduct').default)

import store from './store'
const app = new Vue ({
    el: '#app',
    store
});