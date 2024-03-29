import Vue from "vue";
import App from "./views/frontend/App.vue";
import VueRouter from "vue-router";
import router from "./router/index";
import store from "./store";
import Vuelidate from "vuelidate";
import VueMoment from "vue-moment";
import Axios from "axios";
import common_constants from "./constants/common_constants";
import "./quasar";

Vue.config.productionTip = false;
Vue.use(VueRouter);
Vue.use(Vuelidate);
Vue.use(VueMoment);

window.axios = require("axios");

Vue.prototype.$constants = common_constants;

const app = new Vue({
    el: "#app",
    router,
    store,
    ...App
});

// new Vue({
//   router,
//   store,
//   components: {App},
//   render: h => h(App),
// }).$mount('#app')
