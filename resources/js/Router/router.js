import Vue from 'vue';
import VueRouter from 'vue-router';
import AppForm from './../components/Forum/Form';
import AppLogin from './../components/Login/Login';
import AppSignup from './../components/Login/SignUp';
import ShowQuestion from './../components/Forum/ShowQuestion';
Vue.use(VueRouter)

const routes = [
    {path: '/', component: AppForm, name: 'forum' },
    {path: '/login', component: AppLogin, name: 'login'},
    {path: '/signup', component: AppSignup, name: 'signup'},
    {path: '/question/:slug', component: ShowQuestion, name: 'show.question'}
];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
});

export default router;