import Vue from 'vue';
import Router from 'vue-router';


import GenresRoute from './genres';
import MangasRoute from './mangas';
import AuthorsRoute from './authors';
import Dashboard from './dashboard';
import Auth from './auth';

var route = [GenresRoute,MangasRoute,AuthorsRoute,Dashboard,Auth];

function getRoute(route) {
    var result = [];
    route.forEach(function (value) {
        value.forEach(function (v) {
            result.push(v);
        })
    });
    return result;
}

Vue.use(Router);

export default new Router({
    routes: getRoute(route),
    mode:'history'
})

