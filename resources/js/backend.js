window.popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

import 'bootstrap'
import 'select2'

window.axios = require('axios');
window.axios.default.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// require('./components/Example')