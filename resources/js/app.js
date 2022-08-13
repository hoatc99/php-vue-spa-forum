require('./bootstrap');

import Vue from 'vue';
import Router from './routes';
import App from './components/App';

const app = new Vue({
    el: '#app',
    router: Router,
    render: h => h(App)
});
