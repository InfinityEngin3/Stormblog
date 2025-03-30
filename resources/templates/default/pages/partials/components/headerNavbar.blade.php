<div class="navbar flex items-center">
    <nav>
        <ul class="flex text-neutral-500 text-[10px] gap-2">
            <a href="{{ url('') }}">
                <li class="hover:text-cyan-400 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                    <i class="ti ti-home pb-1 text-lg"></i>
                    <span>Home</span>
                </li>
            </a>
            <a href="{{ url('blog') }}">
                <li class="hover:text-cyan-400 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                    <i class="ti ti-book-2 pb-1 text-lg"></i>
                    <span>Blog</span>
                </li>
            </a>
            @if (!Auth::check())
            <div x-data="{ open: false }">
                <button @click="open = true" class="hover:text-cyan-400 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                    <i class="ti ti-user pb-1 text-lg"></i>
                    <span>Login</span>
                </button>

                <div x-show="open" class="fixed top-0 left-0 w-full h-full bg-neutral-950/90 flex items-center justify-center" style="display: none;">
                    <div class="bg-neutral-300 rounded-sm shadow-xl w-xl" @click.outside="open = false">
                        <div class="modal-header px-4 h-12 flex items-center bg-neutral-200 rounded-t-sm border-b border-neutral-800/20">
                            <h2 class="text-xs font-bold">Iniciar sesión</h2>
                        </div>
                        <div class="modal-content p-6">
                            <form method="post" action="{{ url('login') }}">
                                @csrf
                                <div class="input">
                                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-neutral-500">Dirección de correo</label>
                                    <div class="relative mb-6">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                                            </svg>
                                        </div>
                                        <input type="text" id="input-group-1" class="bg-gray-200 border border-neutral-400/50 text-neutral-500 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="member@example.com" name="member_email">
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="input-group-2" class="block mb-2 text-sm font-medium text-neutral-500">Contraseña</label>
                                    <div class="relative mb-6">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-6 h-6 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <input type="password" id="input-group-2" class="bg-gray-200 border border-neutral-400/50 text-neutral-500 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="••••••••" name="sha_pass_hash">
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <div class="flex flex-col w-1/2 text-xs text-neutral-500 gap-1">
                                        <a href="" class="hover:text-cyan-600 hover:ml-4 transition-all duration-500 ease-in-out">¿No tienes cuenta? Regístrate</a>
                                        <a href="" class="hover:text-cyan-600 hover:ml-4 transition-all duration-500 ease-in-out">¿Has olvidado tú contraseña?</a>
                                    </div>
                                    <div class="w-1/2">
                                        <div class="flex gap-2 justify-end">
                                            <button type="submit" class="bg-red-800 px-4 py-2 border border-red-900 rounded-sm text-xs text-red-400 font-medium hover:brightness-110 cursor-pointer">Cerrar</button>
                                            <button type="submit" class="bg-green-800 px-4 py-2 border border-green-700 rounded-sm text-xs text-green-500 font-medium hover:brightness-110 cursor-pointer">Iniciar sesión</button>
                                        </div>
                                    </div>
                                <div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div x-data="{ open: false }" @click.prevent="open = !open">
                <li class="hover:text-cyan-400 p-1 hover:border-cyan-400 transition-all duration-500 ease-in-out flex flex-col uppercase font-medium text-center bg-neutral-950 items-center justify-center h-13 w-13 rounded-sm border border-neutral-200/15">
                    <img src="{{ url('image/file/members/avatars/no_avatar.gif') }}" class="rounded-xs border border-neutral-200"/>
                </li>
                
                <!-- Dropdown Menu -->
                <ul x-show="open" x-transition class="absolute mt-1 min-w-[150px] bg-neutral-200 border border-neutral-400 text-neutral-500 rounded shadow-lg">
                    <li>
                        <a href="{{ url('logout') }}" @click.stop class="block text-xs px-4 py-3 hover:bg-neutral-100">
                            <i class="ti ti-logout pr-1"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>

            @endif
        </ul>
    </nav>
</div>