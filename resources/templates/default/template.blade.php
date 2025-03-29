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
                <div class="logotype flex items-center gap-3 -mt-1">
                    <div class="logotype-icon text-xl text-neutral-400">
                        <i class="ti ti-code"></i>
                    </div>
                    <div class="logotype-text uppercase">
                        <h1 class="font-semibold text-2xl text-neutral-100">Storm<span class="text-cyan-400">blog</span></h1>
                        <h2 class="font-light text-neutral-500 text-xs">Blog de tecnología</h2>
                    </div>
                </div>
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

        <main class="flex justify-center pt-6">
            <div class="w-5xl">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <section class="blog-articles flex-col flex gap-4">
                            <article class="bg-neutral-300/30 border-neutral-800/5 border rounded-sm grid grid-cols-4">
                                <div>
                                    <img src="{{ url('image/file/thumbnail.webp') }}" alt="" class="w-full h-full object-cover rounded-l-sm" />
                                </div>
                                <div class="col-span-3 flex flex-col justify-between pt-4 px-4 pb-2">
                                    <div>
                                        <h1 class="text-neutral-700 font-medium text-sm">[CURSO] Laravel 11 - Como crear un blog</h1>
                                        <p class="text-neutral-600 text-[13px] pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>
                                    </div>
                                    <div class="flex justify-between items-center pt-4">
                                        <p class="uppercase font-medium text-neutral-500 text-[10px]"><i class="ti ti-calendar"></i> 29 de Marzo 2025</p>
                                        <p class="text-neutral-600 text-xs">Novedades</p>
                                    </div>
                                </div>
                            </article>
                            <article class="bg-neutral-300/30 border-neutral-800/5 border rounded-sm grid grid-cols-4">
                                <div>
                                    <img src="{{ url('image/file/thumbnail.webp') }}" alt="" class="w-full h-full object-cover rounded-l-sm" />
                                </div>
                                <div class="col-span-3 flex flex-col justify-between pt-4 px-4 pb-2">
                                    <div>
                                        <h1 class="text-neutral-700 font-medium text-sm">[CURSO] Laravel 11 - Como crear un blog</h1>
                                        <p class="text-neutral-600 text-[13px] pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>
                                    </div>
                                    <div class="flex justify-between items-center pt-4">
                                        <p class="uppercase font-medium text-neutral-500 text-[10px]"><i class="ti ti-calendar"></i> 29 de Marzo 2025</p>
                                        <p class="text-neutral-600 text-xs">Novedades</p>
                                    </div>
                                </div>
                            </article>
                            <article class="bg-neutral-300/30 border-neutral-800/5 border rounded-sm grid grid-cols-4">
                                <div>
                                    <img src="{{ url('image/file/thumbnail.webp') }}" alt="" class="w-full h-full object-cover rounded-l-sm" />
                                </div>
                                <div class="col-span-3 flex flex-col justify-between pt-4 px-4 pb-2">
                                    <div>
                                        <h1 class="text-neutral-700 font-medium text-sm">[CURSO] Laravel 11 - Como crear un blog</h1>
                                        <p class="text-neutral-600 text-[13px] pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi a dui sodales nisi interdum tempor. Suspendisse pretium quam ipsum, at egestas ante ornare sit amet. Maecenas vitae sem id enim mollis volutpat nec nec nulla. Sed commodo ornare mauris nec bibendum.</p>
                                    </div>
                                    <div class="flex justify-between items-center pt-4">
                                        <p class="uppercase font-medium text-neutral-500 text-[10px]"><i class="ti ti-calendar"></i> 29 de Marzo 2025</p>
                                        <p class="text-neutral-600 text-xs">Novedades</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                    <div class="sidebar">
                        <section class="module">
                            <div class="module-title bg-neutral-300/30 border-neutral-800/5 border rounded-t-sm p-3 font-medium text-neutral-500 text-xs uppercase">
                                <h1>Categorias</h1>
                            </div>
                            <div class="module-content">
                                <nav>
                                    <ul>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Noticias de Tecnología</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Lenguajes de Programación</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Desarrollo Web</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Desarrollo de Apps Móviles</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Inteligencia Artificial</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Ciberseguridad</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Desarrollo de Videojuegos</li>
                                        </a>
                                        <a href="">
                                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs">Hardware y Gadgets</li>
                                        </a>

                                    </ul>
                                </nav>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="bg-neutral-900 h-12 flex justify-center items-center">
        <div class="w-5xl flex justify-between items-center">
            <p class="text-xs text-neutral-600">Copyright &copy; 2025</p>
            <p class="text-xs text-neutral-600">Desarrollado por Stormbyte</p>
        </div>
    </footer>

</body>
</html>