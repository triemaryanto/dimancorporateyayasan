import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

let DataBerita = require("../backend/BeritaComponent.vue").default;
let Image = require("../backend/Image.vue").default;

let routes = [
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
