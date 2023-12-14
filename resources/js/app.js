import 'tailwindcss/tailwind.css';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";
import { createPinia, PiniaVuePlugin } from "pinia";
import piniaPluginPersistedstate from 'pinia-plugin-persistedstate'

import App from "../vue/app.vue";
import Home from "../vue/home.vue";
import Winners from "../vue/winners.vue";
import Actions from "../vue/actions.vue";
import ActionsItems from "../vue/actionsItems.vue";
import Sweepstakes from "../vue/sweepstakes.vue";
import Requests from "../vue/requests.vue";

import { BiInstagram, CoMagnifyingGlass } from "oh-vue-icons/icons"
import { OhVueIcon, addIcons } from "oh-vue-icons"

addIcons(BiInstagram, CoMagnifyingGlass)

const pinia = createPinia().use(piniaPluginPersistedstate);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: Home },
        { path: "/sorteios", component: Sweepstakes },
        { path: "/premiados", component: Winners },
        { path: "/pedidos", component: Requests },
        { path: "/sorteios/:id", component: ActionsItems },
    ]
})

createApp(App)
    .component("v-icon", OhVueIcon)
    .use(router)
    .use(PiniaVuePlugin)
    .use(pinia)
    .mount("#app");
