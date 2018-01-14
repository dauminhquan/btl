
window.Vue = require('vue');

window.axios = require('axios');

Vue.component('tin-tuyen-dung', require('./../components/Students/index/Tintuyendung.vue'));
const tintuyendung = new Vue({
    el: '#tintuyendung'
});