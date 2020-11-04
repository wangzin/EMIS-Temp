require('./bootstrap');
require('admin-lte');


import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
Vue.mixin({ methods: { route } });
Vue.use(InertiaApp); 
Vue.use(InertiaForm);
Vue.use(PortalVue);

const app = document.getElementById('app');
Vue.component('headnav', require('./Layouts/headnav.vue').default);
Vue.component('sidenav', require('./Layouts/sidenav.vue').default);

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
