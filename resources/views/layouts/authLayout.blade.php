<!DOCTYPE html>
<html lang="en">
  <head>
    @vite('resources/css/app.css')

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('titulo')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    @vite('resources/css/nucleo-icons.css')
    @vite('resources/css/nucleo-svg.css')
    @vite('resources/css/argon-dashboard-tailwind.css')
    <!-- Main Styling -->
  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    @yield('contenido')
  </body>
  <!-- plugin for scrollbar  -->
  @vite('resources/js/pulgins/perfect-scrollbar.min.js')
  @vite('resources/js/argon-dashboard-tailwind.js')
  <!-- main script file  -->
</html>
