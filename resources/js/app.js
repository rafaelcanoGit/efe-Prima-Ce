
require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
import store from './store/index'

Vue.component('rick-morty-api', require('./components/RickMortyApi.vue').default);

const app = new Vue({
    el: '#app',
    store

});
