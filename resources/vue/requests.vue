<template>
    <main class="relative h-full">
        <section class="py-4">
            <div class="flex flex-col py-5">
                <div class="flex flex-col justify-center lg:items-center mb-6">
                    <div class="text-gray-400 space-y-3">
                        <h2 class="text-lg md:text-center font-semibold text-slate-100">
                            <span class="text-xl">
                            <v-icon name="co-magnifying-glass"/> Buscar Pedidos
                            </span>
                        </h2>
                        <p class="text-sm  md:text-center text-slate-100">
                            Informe seu e-mail ou telefone para consultar informações sobre os seus pedidos.
                        </p>
                    </div>
                </div>
                <div class="hidden w-full max-w-lg gap-3 grid cols-2 py-2 self-center">
                    <button class="search-field-option p-1.5 text-sm rounded bg-white text-green-600 shadow-md hover:bg-green-600 hover:text-white">
                            Email
                        </button>
                        <button class="search-field-option p-1.5 text-sm rounded bg-white text-green-600 shadow-md hover:bg-green-600 hover:text-white">
                            Telefone
                        </button>
                </div>
                <div></div>
            </div>
        </section>
    </main>
</template>
