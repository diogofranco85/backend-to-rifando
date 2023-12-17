<template>
    <main class="min-h-[38vh]">
        <div id="card" class="md:hidden drop-shadow-md bg-slate-50 mt-2 rounded flex items-center flex-col">

            <div class="rounded ">

                <img src="https://premios061.com/storage/images/FlusqibzJUr7rxo665GPvvggwBgzVwnWFa0h8Lm0.png" title="premio 1" alt="premio 1"/>
                <div class="flex flex-col w-full pl-3 p-2 bg-slate-50">
                    <div class="flex flex-col w-full pl-3 p-2 items-center bg-slate-50">
                        <h1 class="text-xl font-semibold">Muda de vida agora mesmo </h1>
                        <p class="text-slate-500 text-sm ml-2">Escolha sua sorte</p>
                    </div>
                    <h1 class="text-sm text-center font-semibold m-2">Sorteio com um milhão de numeros</h1>
                    <router-link to="/sorteios" class="text-center bg-purple-600 p-2 rounded drop-shadow-sm text-white hover:bg-purple-600">Escolha sua sorte</router-link>
                </div>
            </div>
        </div>
        <section id="banner-desktop" class="hidden md:block">
            <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                banner desktop
            </div>
        </section>
        <section id="awards-section" class="mb-1">
            <div class="max-w-7xl mx-auto flex flex-col items-start">
                <div class="pt-5">
                    <h1 class="text-xl text-slate-100 font-semibold ml-4 mb-3">
                        <v-icon name="bi-arrow-right-square" class="text-yellow-300"/>
                        Prêmios
                    </h1>
                    <p class="ml-4 text-sm text-slate-100 mb-3">
                        Seu sonho bem pertinho de você!
                    </p>
                </div>
                <div class="w-full grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 px-4">
                    <div class=" flex w-full bg-zinc-700 rounded overflow-hidden mb-1 shadow-md hover:shadow-lg content-center relative">
                        <img class="max-w-[120px] min-h-[120px] object-cover" style="height: 100px; width: 200px" src="https://premios061.com/storage/images/raffles/16/EO8F0gPhqf3CVIjd29OGzO0g68x3QlxOmtySBFjp.jpg" alt="alternative image">

                        <div class="flex flex-col w-full px-2 justify-center">
                            <div class="text-slate-100"> PORSCHE PANAMERA</div>
                            <div class="text-gray-400 text-sm">
                                Faça seu 2024 milionário
                            </div>
                        </div>
                            <span class="rounded bg-red-600 px-1.5 text-[13px] bg-opacity-80 text-white absolute top-[10px] right-[6px]">Encerrado</span>

                    </div>
                </div>
            </div>
        </section>
        <section class="" id="winner-section">
            <div class="max-w-7xl mx-auto flex flex-col items-start">
                <div class="pt-5 text-slate-100">
                    <h1 class="text-xl font-semibold ml-4">
                        <v-icon name="bi-trophy" class="text-yellow-300"/>
                        Ganhadores</h1>
                    <p class="ml-4 text-sm text-slate-100 mb-3">Veja os últimos ganhadores</p>
                </div>
                <div class="w-full grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 px-4">
                    <div class="w-full flex rounded-xl bg-zinc-700 text-white overflow-hidden shadow-lg mb-1 p-1.5 relative winner-card">
                            <img class="rounded-full h-16 object-cover w-16" src="https://premios061.com//storage/images/raffles/16/RaooL8fxwUjy8uTeVUqS4oaaKAZKArns62lixXtL.jpg" alt="">
                            <div class="flex justify-end w-full absolute top-1 right-1">
                                <p class="text-[13px] text-slate-400">Cota</p>
                                <span class="rounded-md font-semibold text-green-600 px-1.5 text-[13px]">302557</span>
                            </div>
                            <div class="flex flex-col w-full px-2 justify-center">
                                <div>Leandro de freitas</div>
                                <div class="text-gray-400 text-sm">Ganhou
                                    <span class="font-semibold">PORSCHE PANAMERA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</template>
