<div class="grid grid-cols-3 gap-4">
    <div class="col-span-2">
        <section class="blog-articles flex-col flex gap-4">

            @foreach($articles as $data)
            <article class="bg-neutral-300/30 border-neutral-800/5 border rounded-sm grid grid-cols-4">
                <div>
                    <a href="{{ url('blog/article/'.$data->article_slug.'') }}">
                        <img src="{{ url('image/file/thumbnail.webp') }}" alt="" class="w-full h-full object-cover rounded-l-sm" />
                    </a>
                </div>
                <div class="col-span-3 flex flex-col justify-between pt-4 px-4 pb-2">
                    <div>
                        <a href="{{ url('blog/article/'.$data->article_slug.'') }}">
                            <h1 class="text-neutral-700 font-medium text-sm hover:text-cyan-600 transition-all duration-500 ease-in-out">{{ $data->title }}</h1>
                        </a>
                        <div class="text-neutral-600 text-[13px] pt-3">{!! $data->message !!}</div>
                    </div>
                    <div class="flex justify-between items-center pt-4">
                        <p class="uppercase font-medium text-neutral-500 text-[10px]"><i class="ti ti-calendar"></i> 29 de Marzo 2025</p>
                        <p class="text-neutral-600 text-xs hover:text-cyan-600 transition-all duration-500 ease-in-out">
                            <a href="{{ url('blog/categories/'.$data->cat->slug.'') }}">{{ $data->cat->name }}</a>
                        </p>
                    </div>
                </div>
            </article>
            @endforeach

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
                        @foreach($categories as $category)
                        <a href="{{ url('blog/category/'.$category->slug.'') }}">
                            <li class="bg-neutral-300/10 border-neutral-800/5 border border-t-0 p-3 font-medium text-neutral-500 text-xs hover:text-cyan-600 hover:pl-6 transition-all duration-500 ease-in-out">{{ $category->name }}</li>
                        </a>
                        @endforeach

                    </ul>
                </nav>
            </div>
        </section>
    </div>
</div>