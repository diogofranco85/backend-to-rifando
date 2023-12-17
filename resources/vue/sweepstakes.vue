<template>
    <main class="min-h-[38vh]">
        <section class="my-4">
            <div class="max-w-7xl mx-auto flex flex-col items-start">
                <div>
                    <h1 class="text-xl text-slate-100 font-semibold ml-4">⚡ Prêmios</h1>
                    <p class="ml-4 text-sm text-slate-100 mb-3">Seu sonho bem pertinho de você!</p>
                </div>
                <div class="w-full md:w-1/2 grid gap-3 grid-cols-3 px-4 self-center">
                    <a href="/premios" class="p-1.5 text-center cursor-pointer text-sm rounded bg-neutral-600 text-white text-green-600 shadow-md hover:bg-sky-600 hover:text-white">Todos</a>
                    <a href="/premios?status=open" class="p-1.5 text-center cursor-pointer text-sm rounded bg-neutral-600 text-white text-green-600 shadow-md hover:bg-green-600 hover:text-white">Disponíveis</a>
                    <a href="/premios?status=closed" class="p-1.5 text-center cursor-pointer text-sm rounded bg-neutral-600 text-white text-green-600 shadow-md hover:bg-red-600 hover:text-white">Encerrados</a>
                </div>
            </div>
        </section>

        <section class="mb-1">
            <div class="max-w-7xl mx-auto flex flex-col items-start">
                <div class="w-full grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 px-4">
                    <a href="https://premios061.com/premios/16" class="w-full">
                        <div class=" flex w-full rounded-xl bg-zinc-700 overflow-hidden mb-1 shadow-md hover:shadow-lg content-center relative">
                            <img class="max-w-[120px] min-h-[120px] object-cover" style="height: 100px; width: 200px" src="https://premios061.com/storage/images/raffles/16/EO8F0gPhqf3CVIjd29OGzO0g68x3QlxOmtySBFjp.jpg" alt="alternative image">

                            <div class="flex flex-col w-full px-2 justify-center">
                                <div class="text-slate-100"> PORSCHE PANAMERA</div>
                                <div class="text-gray-400 text-sm">
                                    Faça seu 2024 milionário
                                </div>
                            </div>
                            <span class="rounded bg-red-600 px-1.5 text-[13px] bg-opacity-80 text-white absolute top-[10px] right-[6px]">Encerrado</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>
</template>
