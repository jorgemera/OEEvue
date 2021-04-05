/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;


import Vue from 'vue';
import VueGoodTablePlugin from 'vue-good-table';

// import the styles
import 'vue-good-table/dist/vue-good-table.css'

Vue.use(VueGoodTablePlugin);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('usuarios-component',require('./components/usuarios/usuariosComponent.vue').default);
Vue.component('simulacion-component',require('./components/simulacion/simulacionComponent.vue').default);
Vue.component('alarmas-component',require('./components/alarmas/alarmasComponent.vue').default);
Vue.component('reportes-component',require('./components/reportes/reportesComponent.vue').default);
Vue.component('oee-component',require('./components/oee/oeeComponent.vue').default);
Vue.component('login-component',require('./components/login/loginComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
    el: '#app',
    data:{
        menu : 0,
        
    },

});