window.Vue = require('vue');

window.axios = require('axios');

Vue.component('danh-sach-tin-tuyen-dung', require('./../components/Employers/danhsachtintuyendungcuaban.vue'));
const danhsachtintuyendung = new Vue({
    el: '#timeline'
});