import App from "./vue/App.vue";
import Vue from "vue";
import $ from "jquery";

import ComponentLoader from "./util/ComponentLoader";

import "bootstrap/dist/js/bootstrap";

ComponentLoader(Vue);

Vue.prototype.$ = $;

new Vue({
    el: "#app",
    render: h => h(App),
});
