<template>
    <div class="min-h-[38vh] w-ful flex justify-center items-center">
        <div class="w-full h-full flex flex-col justify-center items-center">
            <h1 class="text-purple-500 text-3xl">Página não localizada</h1>
            <p class="m-3 p-2 text-center rounded text-white bg-purple-500 text-2xl">Ops!! Não conseguimos achar o que você procura, favor tentar novamente ou voltar para a home</p>
            <router-link to="/" class="bg-green-500 hover:bg-green-700 p-2 rounded text-white cursor-pointer">
                <v-icon name="co-home"/>
                Voltar a Home
            </router-link>
        </div>
    </div>
</template>
