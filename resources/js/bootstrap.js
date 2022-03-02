window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

require('../asset/lte/dist/js/adminlte.min.js');

try {

require('bootstrap');

 require('../asset/lte/plugins/jquery-ui/jquery-ui.min.js');

 require('../asset/lte/plugins/bootstrap/js/bootstrap.bundle.min.js');

//  require('../asset/lte/plugins/chart.js/Chart.min.js');

 require('../asset/lte/plugins/sparklines/sparkline.js');

//  require('../asset/lte/plugins/jqvmap/jquery.vmap.min.js');
//  require('../asset/lte/plugins/jqvmap/maps/jquery.vmap.usa.js');

//  require('../asset/lte/plugins/jquery-knob/jquery.knob.min.js');

//  require('../asset/lte/plugins/moment/moment.min.js');
//  require('../asset/lte/plugins/daterangepicker/daterangepicker.js');

//  require('../asset/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');

//  require('../asset/lte/plugins/summernote/summernote-bs4.min.js');

 require('../asset/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');

 require('../asset/lte/dist/js/adminlte.js');

//  require('../asset/lte/dist/js/demo.js');

 require('../asset/lte/dist/js/pages/dashboard.js');

} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
