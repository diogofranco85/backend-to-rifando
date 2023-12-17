import { defineStore } from "pinia";

export const useConfiguration = defineStore('configuration', {
    state: () => ({
        showMenu: true,
    }),

    getters: {
        GET_CURRENT_MENU_CLASS(state) {
            return state.currentClass;
        },
        GET_SHOW_HIDE_MENU_VALUE(state) {
            console.log(state);
            return state.showMenu;
        }
    },

    actions: {
        SET_MENU_SHOW_HIDE() {
            let menu = this.menuShowClass
            if (!this.showMenu) menu = this.menuHideClass;

            this.currentClass = menu;
            this.showMenu = !this.showMenu;
        }
    }
})
