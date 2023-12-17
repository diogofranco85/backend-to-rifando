<script setup>
    import { computed, onMounted } from "vue";
import { useConfiguration } from "../state/configuration";

    const configuration = useConfiguration();

    const getMenuShowHide = computed( () => configuration.showMenu);



    onMounted(() => {
        configuration.SET_MENU_SHOW_HIDE();
    })

    const handlerMenuMobile = function(){
        configuration.SET_MENU_SHOW_HIDE();
        console.log("getmenusho", getMenuShowHide.value);
    }

</script>

<template>
    <div class="w-screen h-screen">
        <header class="relative bg-zinc-900 z-50 shadow-sm">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <div class="flex items-center justify-between border-gray-100 py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <router-link to="/">
                            <img style="max-height: 50px;" src="https://i.ibb.co/MN8TJx1/logo.png" alt="" title=""/>
                        </router-link>
                    </div>
                    <div class="-my-2 -mr-2 md:hidden">
                        <button
                        id="menu-mobile-icon"
                        v-on:click="handlerMenuMobile"
                        type="button"
                        class="mobile-menu-btn inline-flex items-center justify-center rounded-md bg-zinc-800 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-600"
                        >
                            <span class="sr-only pointer-events-none">Abrir Menu</span>
                            <svg class="h-6 w-6 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden space-x-10 md:flex">
                        <router-link  to="/" class="p-[5px] rounded text-base font-medium text-slate-100">Página Inicial</router-link >
                        <router-link  to="/premios" class="p-[5px] rounded text-base font-medium text-slate-100">Prêmios</router-link >
                        <router-link  to="/ganhadores" class="p-[5px] rounded text-base font-medium text-slate-100">Ganhadores</router-link >
                        <router-link  to="/pedidos" class="p-[5px] rounded text-base font-medium text-slate-100">Pedidos</router-link >
                        <router-link  to="/ajuda" class="p-[5px] rounded text-base font-medium text-slate-100">Ajuda</router-link >
                        <router-link  to="/termo-de-uso" class="p-[5px] rounded text-base font-medium text-slate-100">Termo de uso</router-link >
                    </nav>
                    <div class="hidden items-center justify-end md:flex md:flex-1 "></div>
                </div>
                <div id="mobile-menu" :class="
                    getMenuShowHide
                    ? 'absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden'
                    : 'absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden hidden'
                ">
                    <div class="divide-y-2 divide-gray-50 rounded-lg bg-zinc-800 shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="px-5 pt-5 pb-6">

                            <div class="flex items-center justify-between">
                                <div>
                                    <img style="max-height: 50px;" src="https://i.ibb.co/MN8TJx1/logo.png" alt="" title=""/>
                                </div>
                                <div class="-mr-2">
                                    <button type="button" v-on:click="handlerMenuMobile" class="mobile-menu-btn inline-flex items-center justify-center rounded-md active:bg-red-300 focus:bg-red-300 bg-red-300 bg-red-700 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-600">
                                        <span class="sr-only pointer-events-none">Close menu</span>
                                        <svg class="h-6 w-6 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="mt-6">
                                <nav class="grid gap-y-8">

                                        <router-link to="/" class="-m-3 flex items-center rounded-md p-3 focus:bg-zinc-800 active:bg-zinc-800">
                                            <svg class="h-5 w-5 flex-shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                                            </svg>

                                            <span class="ml-3 text-sm font-medium focus:bg-zinc-800 active:bg-zinc-800 text-slate-100">Principal</span>
                                        </router-link>

                                    <router-link to="/ganhadores" class="-m-3 flex items-center rounded-md p-3 focus:bg-zinc-800 active:bg-zinc-800">
                                        <svg class="h-5 w-5 flex-shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"></path>
                                        </svg>
                                        <span class="ml-3 text-sm font-medium text-slate-100">Ganhadores</span>
                                    </router-link>

                                    <router-link to="/premios" class="-m-3 flex items-center rounded-md p-3 focus:bg-zinc-800 active:bg-zinc-800">
                                        <svg class="h-5 w-5 flex-shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                                        </svg>
                                        <span class="ml-3 text-sm font-medium text-slate-100">Prêmios</span>
                                    </router-link>

                                    <router-link to="/pedidos" class="-m-3 flex items-center rounded-md p-3 focus:bg-zinc-800 active:bg-zinc-800">
                                        <svg class="h-5 w-5 flex-shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"></path>
                                        </svg>
                                        <span class="ml-3 text-sm font-medium text-slate-100">Meus números</span>
                                    </router-link>

                                    <router-link to="/termos-de-uso" target="_blank" class="-m-3 flex items-center rounded-md p-3 focus:bg-zinc-800 active:bg-zinc-800">
                                        <svg class="h-5 w-5 flex-shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                        </svg>
                                        <span class="ml-3 text-sm font-medium text-slate-100">Termos de uso</span>
                                    </router-link>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <router-view />

        <section id="faq" class="bg-purple-600 pt-10 mt-20">
            <p class="uppercase font-bold text-2xl mb-10 ml-4 text-white w-full text-center"> Como participar</p>
            <div class="max-w-7xl mx-auto flex flex-col items-start">
                <div class="flex flex-col md:flex-row items-start text-white">
                    <div class="flex-1 relative p-4 min-h-[180px]">
                        <span class="absolute text-black font-extrabold text-opacity-20 text-[180px] font-sans -top-[100px] -left-[5px]">1</span>
                        <h2 class="uppercase font-bold text-lg mb-4">ESCOLHA A AÇÂO</h2>
                        <p class="text-sm">Escolha a ação que gostaria de concorrer, verifique a descrição, regulamento
                        da ação e fotos. Em caso de dúvidas entre em contato com o administrador.</p>
                    </div>

                    <div class="flex-1 relative p-4 min-h-[180px]">
                        <span class="absolute text-black font-extrabold text-opacity-20 text-[180px] font-sans -top-[100px] -left-[5px]">2</span>
                        <h2 class="uppercase font-bold text-lg mb-4">SELECIONE SEUS BILHETES</h2>
                        <p class="text-sm">Você pode escolher quantos bilhetes desejar!
                        Mais bilhetes, mais chances de ganhar.</p>
                    </div>

                    <div class="flex-1 relative p-4 min-h-[180px]">
                        <span class="absolute text-black font-extrabold text-opacity-20 text-[180px] font-sans -top-[100px] -left-[5px]">3</span>
                        <h2 class="uppercase font-bold text-lg mb-4">SELECIONE SEUS BILHETES</h2>
                        <p class="text-sm">Você pode escolher quantos bilhetes desejar!
                        Mais bilhetes, mais chances de ganhar.</p>
                    </div>

                    <div class="flex-1 relative p-4 min-h-[180px]">
                        <span class="absolute text-black font-extrabold text-opacity-20 text-[180px] font-sans -top-[100px] -left-[5px]">4</span>
                        <h2 class="uppercase font-bold text-lg mb-4">SELECIONE SEUS BILHETES</h2>
                        <p class="text-sm">Você pode escolher quantos bilhetes desejar!
                        Mais bilhetes, mais chances de ganhar.</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="pb-5 mt-auto bg-zinc-900">
            <div class="flex flex-col items-center p-2">
                <nav class="flex">
                    <a href="https://www.instagram.com/diogofranco85" target="_blank" class="p-3 cursor-pointer text-green-600 on-hover text-2xl">
                        <v-icon name="bi-instagram" />
                    </a>
                </nav>
            </div>
            <div class="px-2 text-center text-raffle-500 dark:text-gray-300 bg-raffle dark:bg-[#161616]">
                <small class="text-slate-100">A plataforma to rifando e operada por hype tecnologia. Todos os seus direitos são reservados. Brasil 2024</small>
            </div>
        </footer>
    </div>
</template>
