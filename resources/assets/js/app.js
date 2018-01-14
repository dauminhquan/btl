

require('./bootstrap');

window.Vue = require('vue');



Vue.component('tasks', require('./components/Tasks.vue'));
Vue.component('head-menu',require('./components/Menu.vue'));
const app = new Vue({
    el: '#app'
});
const head_menu = new Vue({
    el: "#head"
})