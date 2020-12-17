require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'; 

window.Vue.use(VueRouter);

import IndexComponent from './components/leads/IndexComponent.vue';
import DetailComponent from './components/leads/DetailComponent.vue';

const routes = [
    {
        path: '/',
        name: 'home', 
        components: {
            indexComponent: IndexComponent,
        },
    },
    {path: '/detail/:id', component: DetailComponent, name: 'DetailComponent'}, 
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')


