require('./bootstrap');

import Vue from 'vue';
import router from './routes';
import App from './components/App';
import NProgress from 'nprogress';
import { fromNow } from './filters/timeFilter';
import { largeNumber } from './filters/largeNumber';

axios.interceptors.request.use(function (config) {
    NProgress.start();
    return config;
}, function (error) {
    return Promise.reject(error);
});

axios.interceptors.response.use(function (response) {
    NProgress.done();
    return response;
}, function (error) {
    return Promise.reject(error);
});

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});

Vue.filter('fromNow', fromNow);
Vue.filter('largeNumber', largeNumber);