

require('./bootstrap');

window.Vue = require('vue');



Vue.component('test', require('./components/Students/test.vue'));
const test = new Vue({
    el: '#test'
});