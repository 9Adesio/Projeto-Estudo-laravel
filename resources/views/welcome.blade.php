@extends('layouts.app')

@section('content')
    <header>
        <nav x-data="{ isOpen: false }" class="bg-white shadow dark:bg-gray-900">
            <div class="container px-6 py-4 mx-auto">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="flex items-center justify-between">
                        <a href="#" class="mx-auto ">
                            <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
                        </a>

                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                                aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>

                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

        </nav>

        <div class="w-full bg-center bg-cover h-[38rem]"
            style="background-image: url('https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80');">
            <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold text-white lg:text-4xl">CRUD <span class="text-blue-400">Gerenciamento
                            de Usuários</span></h1>
                    <div class="flex flex-col items-center justify-center py-10 space-y-6">
                        <a href="{{ route('users.create') }}"
                            class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">Criar
                            Usuario</a>

                        <a href="{{ route('users.index') }}"
                            class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                            Ver todos usuários</a>

                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
