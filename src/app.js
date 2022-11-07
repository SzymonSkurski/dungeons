require('./bootstrap');
window.Vue = require('vue');

import store from './store/index'
console.log('das');

Vue.component('tiles', require('../components/Tiles'))
// Vue.component('createPost', require('./components/CreatePost.vue'))

const app = new Vue({
    el: '#app',
    store
});

//
// import Vue from 'vue';
// import Tile from '../src/components/Tile';
//
// window.axios = require('axios');
//
// new Vue({
//     el: '#app',
//
//     components: {
//         Tile,
//     },
//
//     mounted: function () {
//         axios.get('http://127.0.0.1:8000/api/tile')
//             // .then(response => this.tiles = response.data.tiles);
//             .then(response => this.tiles = response.data.tiles);
//     },
//
//     data: {
//         tiles: null,
//     }
// });