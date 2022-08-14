import Vue from 'vue'
import Router from 'vue-router'

// Views
import HomeView from '../components/views/HomeView'
import CategoryView from '../components/views/CategoryView'
import TopicView from '../components/views/TopicView'
import NotFound from '../components/views/NotFound'

Vue.use(Router)

export default new Router({
    routes: [
        { path: '/', name: 'Home', component: HomeView },
        { path: '/category/:categoryId', name: 'Category', component: CategoryView },
        { path: '/topic/:topicId', name: 'Topic', component: TopicView },
        { path: '/login', name: 'Login', component: TopicView },
        { path: '/register', name: 'Register', component: TopicView },

        { path: '*', component: NotFound },
    ],
    mode: 'history'
});