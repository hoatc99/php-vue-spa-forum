require('./bootstrap');

import Vue from 'vue';
import Router from './routes';
import App from './components/App';
import { fromNow } from './filters/timeFilter';
import { largeNumber } from './filters/largeNumber';

const app = new Vue({
    el: '#app',
    router: Router,
    render: h => h(App)
});

Vue.filter('fromNow', fromNow);
Vue.filter('largeNumber', largeNumber);