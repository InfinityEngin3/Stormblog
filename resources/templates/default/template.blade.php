<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page title -->
    <title>{{ $template->show_title($template_title) }}</title>

    <!-- CSS Files -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ url('css/file/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.31.0/dist/tabler-icons.min.css"
/>


</head>
<body class="bg-neutral-200">

    <div class="min-h-screen">
        <div class="bg-neutral-950 h-12 flex items-center justify-center border-b border-neutral-100/10">
            <div class="w-5xl">
                <p class="text-neutral-700 text-sm">Bienvenido a <span class="text-cyan-600">Stormblog</span></p>
            </div>
        </div>
        <header class="bg-neutral-900 h-24 flex items-center justify-center border-b border-neutral-800">
            <div class="w-5xl flex justify-between items-center">
                <a href="{{ url('') }}" class="hover:brightness-110 opacity-80 hover:opacity-100 transition-all duration-500 ease-in-out">
                    <div class="logotype flex items-center gap-3 -mt-1">
                        <div class="logotype-icon text-xl text-neutral-400">
                            <i class="ti ti-code"></i>
                        </div>
                        <div class="logotype-text uppercase">
                            <h1 class="font-semibold text-2xl text-neutral-100">Storm<span class="text-cyan-500">blog</span></h1>
                            <h2 class="font-light text-neutral-500 text-xs">Blog de tecnología</h2>
                        </div>
                    </div>
                </a>
                <div class="navbar flex items-center">
                    <nav>
                        <ul class="flex text-neutral-500 text-[10px] gap-2">
                            <a href="">
                                <li class="hover:text-cyan-400 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                                    <i class="ti ti-home pb-1 text-lg"></i>
                                    <span>Home</span>
                                </li>
                            </a>
                            <a href="">
                                <li class="hover:text-cyan-400 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                                    <i class="ti ti-book-2 pb-1 text-lg"></i>
                                    <span>Blog</span>
                                </li>
                            </a>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        @include('pages::page')

        
    </div>

    <footer class="bg-neutral-900 h-12 flex justify-center items-center">
        <div class="w-5xl flex justify-between items-center">
            <p class="text-xs text-neutral-600">Copyright &copy; 2025</p>
            <p class="text-xs text-neutral-600">Desarrollado por Stormbyte</p>
        </div>
    </footer>

</body>
</html>