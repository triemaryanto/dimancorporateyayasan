/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

import {
    Button,
    HasError,
    AlertError,
    AlertErrors,
    AlertSuccess,
} from "vform/src/components/bootstrap5";
// 'vform/src/components/bootstrap4'
// 'vform/src/components/tailwind'

Vue.component(Button.name, Button);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(AlertErrors.name, AlertErrors);
Vue.component(AlertSuccess.name, AlertSuccess);

let Fire = new Vue();
window.Fire = Fire;
//Import Alert
import Swal from "sweetalert2";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
});
window.Toast = Toast;

// Progress Bar
import VueProgressBar from "vue-progressbar";
Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    height: "20px",
});

import router from "./components/module/router";
import Vue from "vue";
Vue.component(
    "front-end.header",
    require("./components/frontend/Header.vue").default
);
Vue.component(
    "front-end.about",
    require("./components/frontend/About.vue").default
);
Vue.component(
    "front-end.program",
    require("./components/frontend/Program.vue").default
);
Vue.component(
    "front-end.reward",
    require("./components/frontend/Reward.vue").default
);
Vue.component(
    "front-end.team",
    require("./components/frontend/Team.vue").default
);
Vue.component(
    "front-end.media",
    require("./components/frontend/Media.vue").default
);
Vue.component(
    "front-end.figures",
    require("./components/frontend/Figures.vue").default
);
Vue.component(
    "front-end.sertifikat",
    require("./components/frontend/Sertifikat.vue").default
);
Vue.component(
    "front-end.affilations",
    require("./components/frontend/Affilations.vue").default
);
Vue.component(
    "front-end.donate",
    require("./components/frontend/Donate.vue").default
);
Vue.component(
    "front-end.contact",
    require("./components/frontend/Contact.vue").default
);

Vue.component("pagination", require("laravel-vue-pagination"));

const app = new Vue({
    router,
    el: "#app",
});
