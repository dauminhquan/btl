
import Vue from 'vue'
import store from './store/store'
Vue.component('cp1',require('./components/cp1.vue'))
Vue.component('cp2',require('./components/cp2.vue'))

const cp1 = new Vue({
    el: "#cp1",
    store,
    teamplate: '<cp1></cp1>'
    }
)

const cp2 = new Vue({
        el: "#cp2",
        store,
        teamplate: '<cp2></cp2>'
    }
)