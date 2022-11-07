require('./js/bootstrap');
window.Vue = require('vue');

import store from './js/store';
import Tiles from './components/Tiles';

// Vue.component('createPost', require('./components/CreatePost.vue'))

const app = new Vue({
    el: '#app',
    store,
    components: {
        Tiles,
    },
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