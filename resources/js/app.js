require('./bootstrap');

import router from './routes'
import VueRouter from 'vue-router'
import Index from './Index'

window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/Navbar.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);

Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router,
    components: {
        'index': Index
    }
});
