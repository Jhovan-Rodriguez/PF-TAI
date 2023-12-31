<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/QPet-Dashboard.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />


    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="{{asset('css/nucleo-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nucleo-svg.css')}}">
    <link rel="stylesheet" href="{{asset('css/argon-dashboard-tailwind.css')}}">

    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    <script src="{{asset('js/argon-dashboard-tailwind.js')}}"></script>
    <script src="{{asset('js/argon-dashboard-tailwind.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>


    
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    @stack('styles')
    {{-- Estilos de tailwind --}}
    @vite('resources/css/app.css')

    {{-- Scripts de tailwind --}}
    @vite('resources/js/app.js')
    <title>@yield('titulo')</title>
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">

    @yield('contenido_top')

    @auth
        <!-- sidenav  -->
        <aside
            class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
            aria-expanded="false">
            <div class="h-19">
                <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                    sidenav-close></i>
                <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
                    href=" {{ route('post.index') }} ">
                    <img src="{{ asset('img/QPet-Dashboard.png') }}"
                        class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                        alt="main_logo" />
                    <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">WatchZone</span>
                </a>
            </div>

            <hr
                class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

            <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
                <ul class="flex flex-col pl-0 mb-0">

                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href=" {{ route('post.index') }} ">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-door-fill relative top-0 text-sm  text-blue-500" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                        </a>
                    </li>

                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Productos
                        </h6>
                    </li>

                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="{{route('productos.index')}}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width=24" height="24" fill="currentColor"
                                    class="bi bi-cart-fill relative top-0 text-sm leading-normal text-orange-500 " viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Productos</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            Categorías</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="{{route('categorias.index')}}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-tag-fill relative top-0 text-sm leading-normal text-red-600 " viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Categorias</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Marcas
                        </h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="{{route('marcas.index')}}">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-award-fill relative top-0 text-sm leading-normal text-orange-500" viewBox="0 0 16 16">
                                  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Marcas</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Ventas
                        </h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-piggy-bank-fill relative top-0 text-sm leading-normal text-orange-500 " viewBox="0 0 16 16">
                                  <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Registrar venta</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Recibos
                        </h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill relative top-0 text-sm leading-normal text-pink-500" viewBox="0 0 16 16">
                                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Registrar recibo</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            Cotización</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-credit-card-2-back-fill relative top-0 text-sm text-green-500 " viewBox="0 0 16 16">
                                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Registrar
                                cotización</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Clientes
                        </h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill relative top-0 text-sm leading-normal text-purple-500 " viewBox="0 0 16 16">
                                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Registrar clientes</span>
                        </a>
                    </li>
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Usuarios
                        </h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill relative top-0 text-sm leading-normal text-orange-500" viewBox="0 0 16 16">
                                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Registrar usuarios</span>
                        </a>
                    </li>
                </ul>
            </div>

        </aside>
    @endauth

    <!-- end sidenav -->

    @guest
        <div
            class="absolute bg-y-50 w-full top-0 bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg')] min-h-75">
            <span class="absolute top-0 left-0 w-full h-full bg-blue-500 opacity-60"></span>
        </div>
        <main class="relative h-full max-h-screen transition-all duration-200 rounded-xl">
        @endguest

        @auth
            <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
            @endauth


            <!-- Navbar -->
            <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
                navbar-main navbar-scroll="false">
                <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                    <nav>
                        <!-- breadcrumb -->
                        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                            <li class="text-sm leading-normal">
                                @auth
                                    <a class="text-white opacity-50"
                                        href=" {{ route('post.index') }} "> Home</a>
                                @endauth

                                @guest
                                    <a class="text-white opacity-50" href=""> Home</a>
                                @endguest

                            </li>
                            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                                aria-current="page">@yield('titulo')</li>
                        </ol>
                        <h4 class="mb-0 font-bold text-white capitalize"> @yield('titulo') </h4>
                    </nav>

                    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                        <div class="flex items-center md:ml-auto md:pr-4">
                            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">


                            </div>
                        </div>
                        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

                            @auth
                                <li class="flex items-center">
                                    <a href=" {{ route('post.index', auth()->user()->username) }} "
                                        class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                                        <i class="fa fa-user sm:mr-1"></i>
                                        <span class="hidden sm:inline p-2"> {{ auth()->user()->username }} </span>
                                    </a>
                                </li>

                                <li class="flex items-center">
                                    <a href="{{route('logout')}}"
                                        class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                                        <span class="hidden sm:inline"> Cerrar Sesión </span>
                                    </a>
                                </li>
                            @endauth

                            @guest
                                <li class="flex items-center">
                                    <a href="{{ route('login') }}"
                                        class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                                        <i class="fa fa-user sm:mr-1"></i>
                                        <span class="hidden sm:inline"> Iniciar Sesión</span>
                                    </a>
                                </li>
                            @endguest

                            <li class="flex items-center pl-4 xl:hidden">
                                <a href="javascript:;"
                                    class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                                    <div class="w-4.5 overflow-hidden">
                                        <i
                                            class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                        <i
                                            class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                        <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end Navbar -->

            @yield('contenido')

            
        </main>

	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script src="{{ URL::asset('js/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ URL::asset('js/datatables.js') }}"></script>
    <script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>

</body>

</html>
