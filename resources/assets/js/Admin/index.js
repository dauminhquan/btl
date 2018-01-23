
window.Vue = require('vue');

window.axios = require('axios');

Vue.component('tin-tuyen-dung-dang-cho', require('../components/Admin/tindangchoduyet.vue'));
const danhsachtintuyendung = new Vue({
    el: '#tindangchoduyet'
});