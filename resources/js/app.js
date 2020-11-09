require('./bootstrap');
require('admin-lte');
import Vue from 'vue'; 
 
import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
//Import v-from
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

Vue.mixin({ methods: { route } }); 
Vue.use(InertiaApp); 
Vue.use(InertiaForm);
Vue.use(PortalVue);

const app = document.getElementById('app');

Vue.component('headnav', require('./Layouts/headnav.vue').default);
Vue.component('sidenav', require('./Layouts/sidenav.vue').default);

Vue.filter('formatDate', function(value) {
    if (value) { 
      return moment(String(value)).format('MM/DD/YYYY hh:mm:ss')
    }
  });
new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
import moment from 'moment'

