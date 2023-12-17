import 'tailwindcss/tailwind.css';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";
import { createPinia, PiniaVuePlugin } from "pinia";
import piniaPluginPersistedstate from 'pinia-plugin-persistedstate'

import App from "../vue/app.vue";
import Home from "../vue/home.vue";
import Winners from "../vue/winners.vue";
import ActionsItems from "../vue/actionsItems.vue";
import Sweepstakes from "../vue/sweepstakes.vue";
import Requests from "../vue/requests.vue";
import Helpeme from "../vue/helpme.vue";
import PathNotfound from "../vue/pathNotfound.vue";

import {
    BiInstagram,
    CoMagnifyingGlass,
    BiArrowRightSquare,
    IoTrophyOutline,
    BiTrophy
} from "oh-vue-icons/icons"
import { OhVueIcon, addIcons } from "oh-vue-icons"

addIcons(
    BiInstagram,
    CoMagnifyingGlass,
    BiArrowRightSquare,
    IoTrophyOutline,
    BiTrophy
)

const pinia = createPinia().use(piniaPluginPersistedstate);
const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: Home },
        { path: "/premios", component: Sweepstakes },
        { path: "/premios/:id", component: ActionsItems },
        { path: "/ganhadores", component: Winners },
        { path: "/pedidos", component: Requests },
        { path: "/ajuda", component: Helpeme },
        { path: "/:pathMatch(.*)*", component: PathNotfound },
    ]
})

createApp(App)
    .component("v-icon", OhVueIcon)
    .use(router)
    .use(PiniaVuePlugin)
    .use(pinia)
    .mount("#app");
