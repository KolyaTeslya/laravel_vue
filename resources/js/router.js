import Vue from "vue";
import VueRouter from 'vue-router';

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            patch: '/people', component: () =>  import('./components/Person/Index'),
            name: 'person.index'
        },
        {
            patch: '/people/create', component: () =>  import('./components/Person/Create'),
            name: 'person.create'
        }
    ]
})

