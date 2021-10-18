
const appVue = document.getElementById("appVue");

if (appVue) {
    // Require Vue
    window.Vue = require('vue').default;

// Register Vue Components
    Vue.component('shift-challenge', require('../components/Shift-challenge.vue').default);
    Vue.component('loading', require('../components/Loading.vue').default);

// Initialize Vue
    const app = new Vue({
        el: '#appVue',
    });

}
