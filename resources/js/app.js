require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;

try {
  window.$ = window.jQuery = require('jquery');

  require('bootstrap');
} catch (e) {}

require('./index.js');