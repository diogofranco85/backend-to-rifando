<script setup>

</script>

<template>
    <div>
        <header class="relative bg-zinc-900 z-50 shadow-sm">
            <div class="mx-auto max-w-7xl px-4 sm:px-6">
                <div class="flex items-center justify-between border-gray-100 py-6 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <router-link to="/">
                            <img style="max-height: 50px;" src="http://localhost:8000/images/logo.png" alt="" title=""/>
                        </router-link>
                    </div>
                    <div class="-my-2 -mr-2 md:hidden">
                        <button
                        type="button"
                        class="mobile-menu-btn inline-flex items-center justify-center rounded-md bg-zinc-800 p-2 text-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-600"
                        >
                            <span class="sr-only pointer-events-none">Abrir Menu</span>
                            <svg class="h-6 w-6 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden space-x-10 md:flex">
                        <router-link  to="/" class="p-[5px] rounded text-base font-medium text-slate-100">Página Inicial</router-link >
                        <router-link  to="/acoes" class="p-[5px] rounded text-base font-medium text-slate-100">Sorteios</router-link >
                        <router-link  to="/premiados" class="p-[5px] rounded text-base font-medium text-slate-100">Ganhadores</router-link >
                        <router-link  to="/pedidos" class="p-[5px] rounded text-base font-medium text-slate-100">Pedidos</router-link >
                        <router-link  to="/ajuda" class="p-[5px] rounded text-base font-medium text-slate-100">Ajuda</router-link >
                    </nav>
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
