/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./plugins/bootstrap');

window.Vue = require('vue');
import vuetify from './plugins/vuetify'
import router from './router/index'
import App from './baseView/App'

const app = new Vue({
    router,
    vuetify,
    render: h => h(App),
}).$mount('#app');
