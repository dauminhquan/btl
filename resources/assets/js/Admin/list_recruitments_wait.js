
window.Vue = require('vue');

window.axios = require('axios');

Vue.component('danh-sach-dang-cho', require('../components/Admin/danhsachtintuyendungchoduyet.vue'));
const danhsachtintuyendung = new Vue({
    el: '#danhsachtindangchoduyet'
});