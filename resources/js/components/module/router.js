import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

let Home = require("../backend/Home.vue").default;
let DataBerita = require("../backend/BeritaComponent.vue").default;
let Image = require("../backend/Image.vue").default;

let routes = [
    {
        path: "/admin/about",
        component: Home,
    },
    {
        path: "/admin/data-berita",
        component: DataBerita,
    },
    {
        path: "/admin/image",
        component: Image,
    },
];

const router = new VueRouter({
    routes,
    mode: "history",
});

export default router;
